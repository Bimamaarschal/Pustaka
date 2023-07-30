<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit berita') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 pb-10 lg:p-8 bg-white border-b border-gray-200">

                    <div class="pb-10" style="display: flex; justify-content: space-between; align-items: center;">
                        <h1 class="text-2xl font-medium text-dark-500" style="flex-grow: 1;">
                            Ajukan Berita Anda
                        </h1>
                        <a href="{{ route('beritas.index')}}"
                            class="bg-red-500 mb-15 text-white px-6 py-2 rounded">Batal</a>
                    </div>
                    <p class="flex items-center space-x-2 text-sm pb-8 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                        <span>Dengan mengajukan penyimpanan berita, Anda menyetujui kebijakan komunitas kami dan
                            bersedia mematuhi kebijakan tersebut.<br> Setelah di review oleh tim kami berita akan
                            dibagikan secara publik.</span>
                    </p>

                    <form action="{{ route('beritas.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm mb-5">Nama (tidak dapat di ubah)</label>
                                <input type="text" placeholder="Penulis" value="{{ Auth::user()->name }}" class="w-full pointer-events-none rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition " name="penulis" />
                            </div>
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm">Tanggal penulisan (tidak dapat di ubah)</label>
                                <input type="text" placeholder="Penulis" value="{{ \Carbon\Carbon::now()->format('d - M - Y') }}" class=" w-full   pointer-events-none rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500  transition" name="tanggal" />
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm">Judul Berita</label>
                                <input type="text" placeholder="Judul Berita" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" name="judulberita"  value="{{ old('judulberita', $berita->judulberita) }}" id="judulInput" />
                                <p class="text-gray-500 text-sm" id="charCount"></p>
                                @error('judulberita')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm">Gambar Sampul</label>
                                <div class="col-span-12 mb-2">
                                    <span class="sr-only">Pilih gambar sampul anda</span>
                                    <input type="file" name="image" placeholder="Pilih gambar sampul anda" class="block w-full text-sm text-slate-500 file:mr-4 file:py-3.5 file:px-20 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-red-500 file:text-white" value="{{ old('image', $berita->image) }}"/>@error('image')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                            @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian awal dari tulisan yang menjadi ringkasan atau teaser.">Sampaikan Berita Anda</label>
                            <input name="konten" placeholder="Kata pembuka" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" value="{{ old('konten', $berita->konten) }}" />
                            <p class="text-gray-500 text-sm" id="charCount2"></p>
                            @error('konten')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                            </svg>
                            <span>Hak Cipta dilindungi oleh PUSTAKA sebagai penyedia penyimpanan, kami tidak bertanggung
                                jawab atas isi berita yang disimpan.</span>
                        </p>
                        <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Mohon cek keabsahan data yang disimpan sebelum pengajuan penyimpanan berita</span>
                        </p>

                        <button type="submit"
                            class="float-right inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                            Kirim Tulisan
                        </button>
                    </form>
                    <h1 class="pb-10 mt-8">
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.content').ckeditor();
    });
    </script>
</x-app-layout>
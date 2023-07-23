<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Jurnal') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 pb-10 lg:p-8 bg-white border-b border-gray-200">

                <div class="pb-10"
                                        style="display: flex; justify-content: space-between; align-items: center;">
                                        <h1 class="text-2xl font-medium text-dark-500" style="flex-grow: 1;">
                                            Pilihan Tema Jurnal
                                        </h1>
                                        <a href="{{ route('jurnals.review', ['id' => $jurnal->id]) }}"
                                            class="bg-red-500 mb-15 text-white px-6 py-2 rounded">Batal Edit</a>
                                    </div>

                    <p class="flex items-center space-x-2 text-sm pb-8 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                        <span>Dengan mengajukan penyimpanan jurnal, Anda menyetujui kebijakan komunitas kami dan
                            bersedia mematuhi kebijakan tersebut.<br> Setelah di review oleh tim kami Jurnal akan
                            dibagikan secara publik.</span>
                    </p>

                    <form action="{{ route('jurnals.update', ['jurnal' => $jurnal->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm mb-5">
                                    Nama Penulis Jurnal
                                </label>
                                <input type="text" value="{{ $jurnal->penulis }}" placeholder="Penulis" class="
                                w-full
                                                    rounded-md
                                                    border
                                                    border-[#E9EDF4]
                                                    py-3
                                                    px-5
                                                    bg-[#FCFDFE]
                                                    text-base text-gray-600
                                                    placeholder-[#ACB6BE]
                                                    outline-none
                                                    focus-visible:shadow-none
                                                    focus:border-red-500
                                                    focus:ring-red-500
                                                    transition
                                " name="penulis" />
                            </div>
                            <div>
                                <label class="text-gray-500 text-sm mb-5">
                                    Tanggal Pebuatan Jurnal
                                </label>
                                <input type="text" value="{{ $jurnal->tanggalterbit }}" placeholder="Tanggal"
                                     class=" w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] 
                                            text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none 
                                            focus:border-red-500 focus:ring-red-500 transition" name="tanggalterbit" onfocus="(this.type='date')"
                                    onblur="(this.type='text')" />
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm "> Judul Jurnal <br></label>
                                <input type="text" value="{{ $jurnal->judul }}" placeholder="Judul Jurnal" class="
                                w-full
                                                    rounded-md
                                                    border
                                                    border-[#E9EDF4]
                                                    py-3
                                                    px-5
                                                    bg-[#FCFDFE]
                                                    text-base text-gray-600
                                                    placeholder-[#ACB6BE]
                                                    outline-none
                                                    focus-visible:shadow-none
                                                    focus:border-red-500
                                                    focus:ring-red-500
                                                    transition
                                                " name="judul" />
                                @error('judul')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm ">Gambar Representasi Tersimpan Anda Masih Dapat Mengubahnya <br></label>
                                <div class="col-span-12 mb-2">
                                    <span class="sr-only">Pilih gambar sampul anda</span>
                                    <input type="file" value="{{ $jurnal->image }}" name="image"
                                        placeholder="Pilih gambar sampul anda" class="block w-full text-sm text-slate-500
                                                    file:mr-4 file:py-3.5 file:px-20
                                                    file:rounded-md file:border-0 text-gray-600
                                                    file:text-sm file:font-semibold
                                                    file:bg-red-500 file:text-white
                                        " /> @error('image')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="text-gray-500 text-sm "> Kategori Jurnal <br></label>
                            <select value="{{ $jurnal->jenis }}" name="jenis" class="
                            w-full
                                                    rounded-md
                                                    border
                                                    border-[#E9EDF4]
                                                    py-3
                                                    px-5
                                                    bg-[#FCFDFE]
                                                    text-base text-gray-600
                                                    placeholder-[#ACB6BE]
                                                    outline-none
                                                    focus-visible:shadow-none
                                                    focus:border-red-500
                                                    focus:ring-red-500
                                                    transition
                                                ">
                                <option class="text-gray-500 text-sm " value="" disabled >Pilih kategori
                                </option>
                                <option class="text-gray-500 text-sm " value="Teknologi">Teknologi</option>
                                <option class="text-gray-500 text-sm " value="Bisnis">Bisnis</option>
                                <option class="text-gray-500 text-sm " value="Ekonomi">Ekonomi</option>
                                <option class="text-gray-500 text-sm " value="Sejarah">Sejarah</option>
                            </select>
                            @error('jenis')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="text-gray-500 text-sm "> Keterangan Tambahan <br></label>
                            <textarea placeholder="Judul Jurnal" class="
                            w-full
                                                    rounded-md
                                                    border
                                                    border-[#E9EDF4]
                                                    py-3
                                                    px-5
                                                    bg-[#FCFDFE]
                                                    text-base text-gray-600
                                                    placeholder-[#ACB6BE]
                                                    outline-none
                                                    focus-visible:shadow-none
                                                    focus:border-red-500
                                                    focus:ring-red-500
                                                    transition
                                        " name="keterangan">{{ $jurnal->keterangan }}</textarea>
                            @error('keterangan')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="text-gray-500 text-sm mb-5">
                                Abstrak
                            </label>
                            <textarea name="abstrak" placeholder="BLOG TULIS" class="
                                                    ckeditor 
                                                    w-full
                                                    rounded-md
                                                    border
                                                    border-[#E9EDF4]
                                                    py-3
                                                    px-5
                                                    bg-[#FCFDFE]
                                                    text-base text-gray-600
                                                    placeholder-[#ACB6BE]
                                                    outline-none
                                                    focus-visible:shadow-none
                                                    focus:border-red-500
                                                    focus:ring-red-500
                                                    transition
                                                " rows="5">{{ $jurnal->abstrak }}</textarea>
                        </div>
                        <div class="mb-6">
                            <label class="text-gray-500 text-sm "> Data Jurnal Telah Tersimpan Anda Masih Dapat Mengubahnya (Pastikan berekstensi PDF dengan
                                ukuran maksimal 20mb)</label>
                            <div class="col-span-12 mb-2">
                                <span class="sr-only">Pilih Jurnal Anda</span>
                                <input type="file" value="{{ $jurnal->pdf }}" name="pdf" placeholder="Pilih Jurnal Anda"
                                    class="block w-full text-sm text-slate-500
                                            file:mr-4 file:py-3.5 file:px-20
                                            file:rounded-md file:border-0
                                            file:text-sm file:font-semibold
                                            file:bg-red-500 file:text-white
                                            " /> @error('pdf')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                            </svg>
                            <span>Hak Cipta dilindungi oleh PUSTAKA sebagai penyedia penyimpanan, kami tidak bertanggung
                                jawab atas isi jurnal yang disimpan.</span>
                        </p>

                        <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Mohon cek keabsahan data yang disimpan sebelum pengajuan penyimpanan jurnal</span>
                        </p>

                        <button type="submit"
                            class="float-right inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                            Kirim Perubahan
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
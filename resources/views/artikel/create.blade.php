<x-app-layout>

    <!-- Judul Awal -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
                <a href="{{ route('tulis') }}" class="text-white">
                    {{ __('Tulis') }}
                </a>
                <a href="{{ route('artikels.index') }}" class="text-white">
                    / {{ __('Artikel') }}
                </a>/ {{ 'Pengajuan Artikel Baru' }}
            </h2>
    </x-slot>
    <!-- Judul Akhir -->

    <!-- Isi Awal -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="mb-12 p-6 pb-10 lg:p-8 bg-white ">

                    <!-- Judul H1 Awal -->
                    <div class="pb-10" style="display: flex; justify-content: space-between; align-items: center;">
                        <h1 class="text-2xl font-medium text-dark-500" style="flex-grow: 1;">Artikel Baru </h1>
                        <a href="{{ route('artikels.index')}}" class="bg-red-500 mb-15 text-white px-6 py-2 rounded">Batal</a>
                    </div>
                    <!-- Judul H1 Akhir -->

                    <!-- Awal Form -->
                    <p class="flex items-center space-x-2 text-sm pb-8 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                        <span>Dengan mengajukan penyimpanan artikel, Anda menyetujui kebijakan komunitas kami dan bersedia mematuhi kebijakan tersebut.<br> Setelah di review oleh tim kami, Artikel akan dibagikan secara publik.</span>
                    </p>

                    <form action="{{ route('artikels.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-6">
                            <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian judul dari tulisan artikel anda.">ID Artikel</label>
                            <input name="noartikel"  id="noartikel" placeholder="No ID Artikel" class="w-full pointer-events-none rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" value="{{ old('noartikel') }}"/>
                            <p class="text-gray-500 text-sm" id="noartikel"></p>
                            @error('noartikel')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm mb-5"> Nama Penulis Jurnal </label>
                                <input type="text" placeholder="Penulis" value="{{ Auth::user()->name }}" class=" w-full pointer-events-none rounded-md border border-[#E9EDF4]  py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" name="penulis" />
                            </div>

                            <div>
                                <label class="text-gray-500 text-sm mb-5"> Tanggal Pebuatan Jurnal </label>
                                <input type="text" placeholder="Tanggal" value="{{ \Carbon\Carbon::now()->format('d - M - Y') }}" class=" w-full pointer-events-none rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none  focus:border-red-500 focus:ring-red-500 transition" name="tanggal" onfocus="(this.type='date')" onblur="(this.type='text')" />
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm mb-5"> Email Penulis Jurnal </label>
                                <input type="text" placeholder="Email" value="{{ Auth::user()->email }}" class=" w-full pointer-events-none rounded-md border border-[#E9EDF4]  py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" name="tanggal" />
                            </div>

                            <div>
                                <label class="text-gray-500 text-sm mb-5"> Instansi Penulis Jurnal </label>
                                <input type="text" placeholder="Instansi" class=" w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none  focus:border-red-500 focus:ring-red-500 transition" name="instansi" value="{{ old('instansi') }}" />
                            </div>
                            <p class="text-gray-500 text-sm" id="instansi"></p>
                            @error('instansi')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <p class="flex items-center space-x-2 text-sm pb-8 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                        </svg>
                        <span>Isi artikel.</span>
                    </p>

                        <div class="mb-6">
                            <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian judul dari tulisan artikel anda.">Judul Artikel</label>
                            <input name="judul" placeholder="Judul" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" value="{{ old('judul') }}"/>
                            <p class="text-gray-500 text-sm" id="judul"></p>
                            @error('judul')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm">Kata Keterangan</label>
                                <input type="text" placeholder="Kata Keterangan" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" name="kataketerangan" value="{{ old('kataketerangan') }}" id="kataketerangan" />
                                <p class="text-gray-500 text-sm" id="kataketerangan"></p>
                                @error('kataketerangan')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm">Gambar Representasi</label>
                                <div class="col-span-12 mb-2">
                                    <span class="sr-only">Pilih gambar representasi anda</span>
                                    <input type="file" name="image" placeholder="Pilih gambar representasi anda" class="block w-full text-sm text-slate-500 file:mr-4 file:py-3.5 file:px-20 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-red-500 file:text-white" value="{{ old('image') }}"/>
                                    @error('image')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-6">
                            <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian abstrak dari tulisan artikel anda.">Abstrak</label>
                            <textarea name="abstrak"  id="abstrak" placeholder="Abstrak Artikel" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" value="{{ old('abstrak') }}"></textarea>
                            <p class="text-gray-500 text-sm" id="abstrak"></p>
                            @error('abstrak')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian untuk menambahkan kata kunci dari artikel anda.">Kata Kunci (max:5kata)</label>
                            <div class="flex items-center">
                                <input type="text" id="kata-kunci-input" placeholder="Kata Kunci Utama" class="flex-1 rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition">
                                <button type="button" id="tambah-kata-kunci" class="float-right ml-5 bg-red-500 mb-15 text-white px-6 py-2 rounded">Tambah Kata Kunci</button>
                            </div>
                            <div id="kata-kunci-container" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition mt-2"></div>
                        </div>

                        <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                            </svg>
                            <span>Hak Cipta dilindungi oleh PUSTAKA sebagai penyedia penyimpanan, kami tidak bertanggung jawab atas isi jurnal yang disimpan.</span>
                        </p>

                        <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span>Mohon cek keabsahan data yang disimpan sebelum pengajuan penyimpanan jurnal</span>
                        </p>

                        <button type="submit" class="float-right bg-red-500 mb-15 text-white px-6 py-2 rounded">
                            Kirim Tulisan
                        </button>
                    </form>
                    <!-- Akhir Form -->

                </div>
            </div>
        </div>
    </div>

    <!-- Fungsi Genearate ID Acak -->
    <script>
        function generateRandomValue() {
            const alphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            let randomValue = '';
            for (let i = 0; i < 20; i++) {
            const randomIndex = Math.floor(Math.random() * alphabet.length);
            randomValue += alphabet[randomIndex];
            }
            document.getElementById('noartikel').value = randomValue;
        }
        window.onload = function() {
            generateRandomValue();
        };
    </script>

    <!-- Fungsi Tambah Kata Kunci Abstrak -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tambahButton = document.getElementById("tambah-kata-kunci");
            const kataKunciInput = document.getElementById("kata-kunci-input");
            const kataKunciContainer = document.getElementById("kata-kunci-container");

            tambahButton.addEventListener("click", function() {
                const kataKunciValue = kataKunciInput.value.trim();
                if (kataKunciValue !== "") {
                    const existingKataKunci = kataKunciContainer.innerText.trim();
                    const newKataKunci = kataKunciValue + (existingKataKunci !== "" ? ', ' : '') + existingKataKunci;
                    const kataKunciArray = newKataKunci.split(',').map(item => item.trim());
                    if (kataKunciArray.length > 5) {
                        return;
                    }
                    kataKunciContainer.innerText = newKataKunci;
                    kataKunciInput.value = "";
                }
            });
        });
    </script>

</x-app-layout>
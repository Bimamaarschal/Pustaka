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
                        <a href="{{ route('artikels.index')}}" class="border mr-2 border-red-500 rounded text-red-500 px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                            <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <!-- Judul H1 Akhir -->

                    <!-- Awal Form -->
                    <p class="flex items-center space-x-2 text-sm pb-8 text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                        <span>Dengan mengajukan penyimpanan artikel, Anda menyetujui kebijakan komunitas kami dan bersedia mematuhi kebijakan tersebut.<br> Setelah di review oleh tim kami, Artikel akan dibagikan secara publik.</span>
                    </p>

                    <div class="progress mb-3"> <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div> </div>

                    <form id="multiStepForm" action="{{ route('artikels.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="step" data-step="1">
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
                                    <label class="text-gray-500 text-sm mb-5"> Nama Penulis Artikel </label>
                                    <input type="text" placeholder="Penulis" value="{{ Auth::user()->name }}" class=" w-full pointer-events-none rounded-md border border-[#E9EDF4]  py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" name="penulis" />
                                </div>

                                <div>
                                    <label class="text-gray-500 text-sm mb-5"> Tanggal Pebuatan Artikel </label>
                                    <input type="text" placeholder="Tanggal" value="{{ \Carbon\Carbon::now()->format('d / M / Y') }}" class=" w-full pointer-events-none rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none  focus:border-red-500 focus:ring-red-500 transition" name="tanggal" onfocus="(this.type='date')" onblur="(this.type='text')" />
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-6">
                                    <label class="text-gray-500 text-sm mb-5"> Email Penulis Artikel </label>
                                    <input type="text" placeholder="Email" value="{{ Auth::user()->email }}" class=" w-full pointer-events-none rounded-md border border-[#E9EDF4]  py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" name="email" />
                                </div>
                                @error('email')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                                <div>
                                    <label class="text-gray-500 text-sm mb-5"> Instansi Penulis Artikel </label>
                                    <input type="text" placeholder="Instansi" class=" w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none  focus:border-red-500 focus:ring-red-500 transition" name="instansi" value="{{ old('instansi') }}" />
                                </div>
                                <p class="text-gray-500 text-sm" id="instansi"></p>
                                @error('instansi')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-10">
                                <label class="text-gray-500 text-sm "> Kategori Artikel </label>
                                <select name="jenis" value="{{ old('jenis') }}" class=" w-full rounded-md  border border-[#E9EDF4] py-3  px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500  transition">
                                    <option class="text-gray-500 text-sm " value="" disabled selected>Pilih kategori </option>
                                    <option class="text-gray-500 text-sm " value="Teknologi">Teknologi</option>
                                    <option class="text-gray-500 text-sm " value="Bisnis">Bisnis</option>
                                    <option class="text-gray-500 text-sm " value="Ekonomi">Ekonomi</option>
                                    <option class="text-gray-500 text-sm " value="Sejarah">Sejarah</option>
                                </select>
                                @error('jenis')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="button" class=" next-step float-right bg-red-500 mb-15 text-white px-6 py-2 rounded" data-step="2">
                                Selanjutnya
                            </button>
                        </div>

                        <div class="step" data-step="2">
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
                                        <input type="file" name="image" placeholder="Pilih gambar representasi anda" class="block w-full  rounded-md border border-[#E9EDF4] text-sm text-slate-500 file:mr-4 file:py-3.5 file:px-20 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-red-500 file:text-white" value="{{ old('image') }}"/>
                                        @error('image')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="mb-6">
                                <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian abstrak dari tulisan artikel anda.">Abstrak</label>
                                <textarea name="abstrak" id="abstrak" placeholder="Abstrak Artikel" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" >{{ old('abstrak') }}</textarea>
                                <p class="text-gray-500 text-sm" id="charCount">
                                Karakter: <span id="charNum">0</span> / Maksimal: 1600 | Kata: <span id="wordNum">0</span> / Maksimal: 300
                                </p>

                                @error('abstrak')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-10">
                                <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian untuk menambahkan kata kunci dari artikel anda.">Kata Kunci (max:5kata)</label>
                                <div class="flex items-center">
                                    <input type="text" id="kata-kunci-input" placeholder="Kata Kunci Utama" class="flex-1 rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition">
                                    <button type="button" id="tambah-kata-kunci" class="float-right ml-2 bg-red-500 text-white px-3 py-3 rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <input name="katakunci" id="kata-kunci-container" class="w-full pointer-events-none rounded-md border border-[#E9EDF4] py-3 px-3 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition mt-2" value="{{ old('katakunci') }}">
                            </div>
                            <button type="button" class="float-right ml-2 bg-red-500 mb-15 text-white px-6 py-2 rounded next-step" data-step="3">Selanjutnya</button>
                            <button type="button" class="float-right  bg-red-500 mb-15 text-white px-6 py-2 rounded prev-step" data-step="1">Kembali</button>
                        </div>

                        <div class="step" data-step="3">  
                            <div class="pb-10">
                                <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian latar belakang dari tulisan artikel anda.">Latar Belakang</label>
                                <textarea name="latarbelakang" id="latarbelakang" placeholder="Latar Belakang Artikel" class="w-full rounded-md border border-[#E9EDF4] h-80 py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" >{{ old('latarbelakang') }}</textarea>
                                @error('latarbelakang')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="button" class="float-right ml-2 bg-red-500 mb-15 text-white px-6 py-2 rounded next-step" data-step="4">Selanjutnya</button>
                            <button type="button" class="float-right bg-red-500 mb-15 text-white px-6 py-2 rounded prev-step" data-step="2">Kembali</button>
                        </div>

                        <div class="step" data-step="4">
                            <div class="pb-10">
                                <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian metode dari tulisan artikel anda.">Metode</label>
                                <textarea name="metode" id="metode" placeholder="Metode Artikel yang digunakan" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition">{{ old('metode') }}</textarea>
                                @error('metode')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <button type="button" class="float-right ml-2 bg-red-500 mb-15 text-white px-6 py-2 rounded next-step" data-step="5">Selanjutnya</button>
                            <button type="button" class="float-right bg-red-500 mb-15 text-white px-6 py-2 rounded prev-step" data-step="3">Kembali</button>
                        </div>

                        <div class="step" data-step="5">
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian hasil penelitian dari tulisan artikel anda.">Hasil</label>
                                <textarea name="hasil" id="hasil" placeholder="Hasil Penelitian Artikel" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition">{{ old('hasil') }}</textarea>
                                @error('hasil')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian pembahasan dari tulisan artikel anda.">Pembahasan</label>
                                <textarea name="pembahasan" id="pembahasan" placeholder="Pembahasan Artikel yang digunakan" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" >{{ old('pembahasan') }}</textarea>
                                @error('pembahasan')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="button" class="float-right ml-2 bg-red-500 mb-15 text-white px-6 py-2 rounded next-step" data-step="6">Selanjutnya</button>
                            <button type="button" class="float-right bg-red-500 mb-15 text-white px-6 py-2 rounded prev-step" data-step="4">Kembali</button>
                        </div>
 
                        <div class="step" data-step="6">
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian kesimpulan penelitian dari tulisan artikel anda.">Kesimpulan</label>
                                <textarea name="simpulan" id="simpulan" placeholder="Kesimpulan Artikel" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition">{{ old('simpulan') }}</textarea>
                                @error('simpulan')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian saran dari tulisan artikel anda.">Saran</label>
                                <textarea name="saran" id="saran" placeholder="Saran" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" >{{ old('saran') }}</textarea>
                                @error('saran')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <button type="button" class="float-right ml-2 bg-red-500 mb-15 text-white px-6 py-2 rounded next-step" data-step="7">Selanjutnya</button>
                            <button type="button" class="float-right bg-red-500 mb-15 text-white px-6 py-2 rounded prev-step" data-step="5">Kembali</button>
                        </div>

                        <div class="step" data-step="7">
                            <div class="mb-6">
                                <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian referensi dari tulisan artikel anda.">Referensi</label>
                                <textarea name="referensi" id="referensi" placeholder="Referensi" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition">{{ old('referensi') }}</textarea>
                                @error('referensi')
                                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                                </svg>
                                <span>Hak Cipta dilindungi oleh PUSTAKA sebagai penyedia penyimpanan, kami tidak bertanggung jawab atas isi artikel yang disimpan.</span>
                            </p>

                            <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Mohon cek keabsahan data yang disimpan sebelum pengajuan penyimpanan artikel</span>
                            </p>

                            <button type="submit" class="float-right bg-red-500 mb-15 text-white px-6 py-2 rounded"> Kirim Tulisan </button>
                            <button type="button" class="float-right mr-2 bg-red-500 mb-15 text-white px-6 py-2 rounded prev-step" data-step="7">Kembali</button>
                        </div>

                    </form>
                    <!-- Akhir Form -->
                    
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Fungsi Data Step -->
    <script>
        $(document).ready(function() {
            var stepTexts = [
                "<span class='text-base font-bold flex pb-3 items-center space-x-2 text-red-500'>Data Penulis (1-7)</span>",
                "<span class='text-base font-bold flex pb-3 items-center space-x-2 text-red-500'>Pengantar (2-7)</span>",
                "<span class='text-base font-bold flex pb-3 items-center space-x-2 text-red-500'>Bab I - Pendahuluan (3-7)</span>",
                "<span class='text-base font-bold flex pb-3 items-center space-x-2 text-red-500'>Bab II - Metode (4-7)</span>",
                "<span class='text-base font-bold flex pb-3 items-center space-x-2 text-red-500'>Bab III - Hasil dan Pembahasan (5-7)</span>",
                "<span class='text-base font-bold flex pb-3 items-center space-x-2 text-red-500'>Bab IV - Kesimpulan (6-7)</span>",
                "<span class='text-base font-bold flex pb-3 items-center space-x-2 text-red-500'>Referensi (7-7)</span>",
            ];

            var totalSteps = $(".step").length;
            var currentStep = 1;

            $(".step").hide();
            $(".step[data-step='1']").show();
            updateProgressBar(1);

            $(".next-step").click(function() {
                if (validateStepInputs(currentStep)) {
                    currentStep++;
                    $(".step").hide();
                    $(".step[data-step='" + currentStep + "']").show();
                    updateProgressBar(currentStep);
                }
            });

            $(".prev-step").click(function() {
                currentStep--;
                $(".step").hide();
                $(".step[data-step='" + currentStep + "']").show();
                updateProgressBar(currentStep);
            });

            function updateProgressBar(step) {
                var progress = (step / totalSteps) * 100;
                $(".progress-bar").css("width", progress + "%").attr("aria-valuenow", progress).html(stepTexts[step - 1]);
            }

            function validateStepInputs(step) {
                var isValid = true;
                var stepInputs = $(".step[data-step='" + step + "']").find("input[required]");
                stepInputs.each(function() {
                    if ($(this).val().trim() === "") {
                        isValid = false;
                        $(this).addClass("is-invalid");
                    } else {
                        $(this).removeClass("is-invalid");
                    }
                });
                return isValid;
            }
        });
    </script>

    <!-- Fungsi Genearate ID Acak -->
    <script>
        function generateRandomValue() {
            const alphabet = '0123456789';
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
                    const existingKataKunci = kataKunciContainer.value;
                    const newKataKunci = kataKunciValue + (existingKataKunci !== "" ? ',' : '') + existingKataKunci;

                    const kataKunciArray = newKataKunci.split(',').map(item => item.trim());
                    if (kataKunciArray.length > 5) {
                        return;
                    }
                    kataKunciContainer.value = newKataKunci;
                    kataKunciInput.value = "";
                }
            });
        });
    </script>

    <script>
        const inputField = document.querySelector('[name="abstrak"]');
        const charNumDisplay = document.getElementById('charNum');
        const wordNumDisplay = document.getElementById('wordNum');
        const maxCharacters = 1600;
        const maxWords = 300;

        function updateCount() {
            const currentText = inputField.value;
            const currentLength = currentText.length;
            charNumDisplay.textContent = currentLength;

            const wordArray = currentText.trim().split(/\s+/);
            const currentWordCount = wordArray.length;
            wordNumDisplay.textContent = currentWordCount;

            if (currentLength > maxCharacters) {
            charNumDisplay.style.color = 'red';
            } else {
            charNumDisplay.style.color = 'gray';
            }

            if (currentWordCount > maxWords) {
            wordNumDisplay.style.color = 'red';
            } else {
            wordNumDisplay.style.color = 'gray';
            }
        }

        inputField.addEventListener('input', updateCount);
        window.addEventListener('load', updateCount);
    </script>



<script>
        document.addEventListener("DOMContentLoaded", function () {
            new FroalaEditor("#latarbelakang", {
                toolbarButtons: [
                                    'fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'color', 'backgroundColor', 'align', 'formatOL', 'formatUL',
                                    '|',
                                    'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'quote', 'specialCharacters', 
                                    '|',
                                    'undo', 'redo', 'clearFormatting', 'selectAll', 'html', 'help',
                                ],
                                height: 300,
                                quickInsertEnabled: false,
                                });
            new FroalaEditor("#metode", {
                toolbarButtons: [
                                    'fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'color', 'backgroundColor', 'align', 'formatOL', 'formatUL',
                                    '|',
                                    'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'quote', 'specialCharacters', 
                                    '|',
                                    'undo', 'redo', 'clearFormatting', 'selectAll', 'html', 'help',
                                ],
                                height: 300,
                                quickInsertEnabled: false,
                                });
            new FroalaEditor("#hasil", {
                toolbarButtons: [
                                    'fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'color', 'backgroundColor', 'align', 'formatOL', 'formatUL',
                                    '|',
                                    'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'quote', 'specialCharacters', 
                                    '|',
                                    'undo', 'redo', 'clearFormatting', 'selectAll', 'html', 'help',
                                ],
                                height: 250,
                                quickInsertEnabled: false,
                                });
            new FroalaEditor("#pembahasan", {
                toolbarButtons: [
                                    'fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'color', 'backgroundColor', 'align', 'formatOL', 'formatUL',
                                    '|',
                                    'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'quote', 'specialCharacters', 
                                    '|',
                                    'undo', 'redo', 'clearFormatting', 'selectAll', 'html', 'help',
                                ],
                                height: 250,
                                quickInsertEnabled: false,
                                });
            new FroalaEditor("#simpulan", {
                toolbarButtons: [
                                    'fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'color', 'backgroundColor', 'align', 'formatOL', 'formatUL',
                                    '|',
                                    'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'quote', 'specialCharacters', 
                                    '|',
                                    'undo', 'redo', 'clearFormatting', 'selectAll', 'html', 'help',
                                ],
                                height: 250,
                                quickInsertEnabled: false,
                                });
            new FroalaEditor("#saran", {
                toolbarButtons: [
                                    'fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'color', 'backgroundColor', 'align', 'formatOL', 'formatUL',
                                    '|',
                                    'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'quote', 'specialCharacters', 
                                    '|',
                                    'undo', 'redo', 'clearFormatting', 'selectAll', 'html', 'help',
                                ],
                                height: 250,
                                quickInsertEnabled: false,
                                });
            new FroalaEditor("#referensi", {
                toolbarButtons: [
                                    'fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', 'color', 'backgroundColor', 'align', 'formatOL', 'formatUL',
                                    '|',
                                    'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', 'quote', 'specialCharacters', 
                                    '|',
                                    'undo', 'redo', 'clearFormatting', 'selectAll', 'html', 'help',
                                ],
                                height: 300,
                                quickInsertEnabled: false,
                                });
        });
    </script>

</x-app-layout>
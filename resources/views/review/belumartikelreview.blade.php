<x-app-layout>
    
    <!-- Judul Awal -->
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-white leading-tight">
                <a href="{{ route('tulis') }}" class="text-white">
                    {{ __('Tulis') }}
                </a>
                <a href="{{ route('artikels.index') }}" class="text-white">
                    / {{ __('Artikel') }}
                </a>/ Review-2 / ID {{ $artikel->noartikel }}
            </h2>
        </div>
    </x-slot>
    <!-- Judul Akhir -->

    <!-- Tampilan Keterangan Awal -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-ml sm:rounded-lg">
                <div class="flex items-center">
                    <img src="{{ asset($artikel->image) }}" alt="image" class=" object-cover object-center mr-4" style="width: 450px; height: 250px; " />

                    <div class=" ml-5  mr-5 ">
                        <div class="flex mb-5">
                        <span class="bg-red-500 rounded inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-white mr-2"> ID : {{ $artikel->noartikel }} </span>
                            <span class="bg-red-500 rounded inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-white mr-2"> {{ $artikel->jenis }} </span>
                            <span class="bg-red-500 rounded inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-white mr-2"> {{ $artikel->tanggal }} </span>
                        </div>

                        <h3 class=" font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-2 inline-block text-dark hover:text-primary">
                                {{ $artikel->judul }}
                        </h3>

                        <table>
                            <tr>
                                <td class="text-sm pb-2 text-body-color">Penulis</td>
                                <td class="text-sm pb-2 text-body-color">: {{ $artikel->penulis }}</td>
                            </tr>
                            <tr>
                                <td class="text-sm pb-2 text-body-color">Email</td>
                                <td class="text-sm pb-2 text-body-color">: {{ $artikel->email }}</td>
                            </tr>
                            <tr>
                                <td class="text-sm pb-2 text-body-color">Instansi</td>
                                <td class="text-sm pb-2 text-body-color">: {{ $artikel->instansi }}</td>
                            </tr>
                            <tr>
                                <td class="text-sm pb-2 text-body-color">Keterangan</td>
                                <td class="text-sm pb-2 text-body-color">: {{ $artikel->kataketerangan }}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tampilan Keterangan Akhir -->

    <!-- Awal konversi -->
    <div class="py-2 pb-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 mb-12 lg:p-8 bg-white">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h1 class="text-2xl font-semibold font-medium text-dark-500" style="flex-grow: 1;">Review Artikel</h1>

                        <span class="inline-block text-center py-2 px-2 text-xs leading-loose font-semibold ml-2
                                    @if ($artikel->review === 'Belum di review')
                                        bg-red-500 text-white
                                    @elseif ($artikel->review === 'Artikel telah di review')
                                        bg-green-500 text-white
                                    @elseif ($artikel->review === 'Artikel terdapat kesalahan')
                                        bg-yellow-500 text-white
                                    @elseif ($artikel->review === 'Artikel proses lebih lanjut')
                                        bg-yellow-500 text-white
                                    @else
                                        bg-gray-500 text-white
                                    @endif
                                    rounded">
                                    @if ($artikel->review === 'Belum di review')
                                    Artikel status belum di review
                                    @elseif ($artikel->review === 'Artikel telah di review')
                                    Artikel status sudah di review
                                    @elseif ($artikel->review === 'Artikel terdapat kesalahan')
                                    Artikel status terdapat kesalahan
                                    @elseif ($artikel->review === 'Artikel proses lebih lanjut')
                                    Artikel status proses review lebih lanjut
                                    @else
                                    Status review tidak valid
                                    @endif
                                </span>

                    </div>
                    <p class=" mb-10 text-gray-500 leading-relaxed">
                        Berikut adalah artikel yang masih berstatus belum di review, kesalahan, peroses lebih lanjut. Selamat Mereview.
                    </p>

                    <div class="container grid md:grid-cols-2 gap-4">
                        <!-- Grid 1 - iframe -->
                        <div class=" rounded-lg fadeInUp flex items-center" >
                            <iframe class=" rounded-2xl wow w-full " src="{{ asset('storage/pdfartikel/' . $artikel->pdfhasil) }}" height="750"></iframe>
                        </div>
                        <!-- Grid 2 - teks -->
                        <form action="{{ route('timreview.artikels.store', ['id' => $artikel->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                            <div class="flex flex-col justify-between">
                                <div class="pb-10">
                                    <h2 class="text-xl mb-4">Form Hasil Review</h2>
                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="mb-6">
                                            <label class="text-gray-500 text-sm mb-5"> Nama Review </label>
                                            <input type="text" placeholder="Review" value="{{ Auth::user()->name }}" class=" w-full pointer-events-none rounded-md border border-[#E9EDF4]  py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" name="nama_review" />
                                        </div>

                                        <div>
                                            <label class="text-gray-500 text-sm mb-5"> Tanggal Review </label>
                                            <input type="text" placeholder="Tanggal" value="{{ \Carbon\Carbon::now()->format('d / M / Y') }}" class=" w-full pointer-events-none rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none  focus:border-red-500 focus:ring-red-500 transition" name="tanggal_review" onfocus="(this.type='date')" onblur="(this.type='text')" />
                                        </div>
                                    </div>
                                    
                                    <div class="mb-6">
                                        <label class="text-gray-500 text-sm "> Hasil Review</label>
                                        <select name="review" value="{{ $artikel->review }}" class=" w-full rounded-md  border border-[#E9EDF4] py-3  px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500  transition">
                                            <option class="text-gray-500 text-sm " value="" disabled >Pilih kategori Hasil Review </option>
                                            <option class="text-gray-500 text-sm " value="Belum di review">Belum di review</option>
                                            <option class="text-gray-500 text-sm " value="Artikel telah di review">Artikel telah di review</option>
                                            <option class="text-gray-500 text-sm " value="Artikel terdapat kesalahan">Artikel terdapat kesalahan</option>
                                            <option class="text-gray-500 text-sm " value="Artikel proses lebih lanjut">Artikel proses lebih lanjut</option>
                                        </select>
                                        @error('review')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div>
                                        <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian keterangan hasil review artikel.">Keterangan Hasil Review</label>
                                        <textarea name="keterangan_review" id="keterangan_review" placeholder="Keterangan Hasil Review" class="w-full h-80 rounded-md border border-[#E9EDF4] bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none  focus:border-red-500 focus:ring-red-500 transition" >{{ $artikel->keterangan_review }}</textarea>
                                        <p class="text-gray-500 text-sm" id="charCount">
                                        Karakter: <span id="charNum">0</span> / Maksimal: 800 | Kata: <span id="wordNum">0</span> / Maksimal: 150
                                        </p>

                                        @error('keterangan_review')
                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                </div>  
                            </div>
                            <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <span>Mohon cek sebelum hasil review di kirimkan, jika review dinyatakan Publish artikel akan bersifat publik, terima kasih atas kerja sama ini.</span>
                            </p>
                            <button type="submit" class="float-right bg-red-500 text-white px-6 py-2 rounded"> Kirim Review</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script>
        const inputField = document.querySelector('[name="keterangan_review"]');
        const charNumDisplay = document.getElementById('charNum');
        const wordNumDisplay = document.getElementById('wordNum');
        const maxCharacters = 800;
        const maxWords = 150;

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
    <!-- Akhir Konversi -->

</x-app-layout>
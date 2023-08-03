<div class="p-6 mb-12 lg:p-8 bg-white ">

    <!-- Awal Judul -->
    <h1 class="pb-10 mt-8 text-2xl font-medium text-gray-900">
        Isi Blog Anda di sini
    </h1>
    <!-- Akhir Judul -->

    <!-- Awal Form Blog -->
    <form action="{{ route('tulisblogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                <label class="text-gray-500 text-sm">Judul Blog</label>
                <input type="text" placeholder="Judul" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" name="judul" value="{{ old('judul') }}" id="judulInput" />
                <p class="text-gray-500 text-sm" id="charCount"></p>
                @error('judul')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label class="text-gray-500 text-sm">Gambar Sampul</label>
                <div class="col-span-12 mb-2">
                    <span class="sr-only">Pilih gambar sampul anda</span>
                    <input type="file" name="image" placeholder="Pilih gambar sampul anda" class="block w-full text-sm text-slate-500 file:mr-4 file:py-3.5 file:px-20 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-red-500 file:text-white" value="{{ old('image') }}"/>
                    @error('image')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
        </div>

        <div class="mb-6">
            <label class="text-gray-500 text-sm" title="Keterangan: Ini adalah bagian awal dari tulisan yang menjadi ringkasan atau teaser.">Kata Pembuka (Teaser)</label>
            <input name="konten1" placeholder="Kata pembuka" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" value="{{ old('konten1') }}"/>
            <p class="text-gray-500 text-sm" id="charCount2"></p>
            @error('konten1')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="text-gray-500 text-sm">Isi Blog</label>
            <div class="pr-10 pl-10">
                <textarea name="konten2" placeholder="BLOG TULIS" id="froalaEditor" class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none focus:border-red-500 focus:ring-red-500 transition" rows="5">{{ old('konten2') }} </textarea>
            </div>
        </div>

        <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
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
        
        <button type="submit" class="float-right bg-red-500 text-white rounded-md px-6 py-3 text-sm font-medium shadow-md hover:bg-primary-600 focus:outline-none focus:bg-primary-600 active:bg-primary-700">
            Kirim Tulisan
        </button>

    </form>
    <!-- Akhir Form Blog -->

    <!-- Awal charCount  -->
    <script>
        const inputField = document.getElementById('judulInput');
        const charCountDisplay = document.getElementById('charCount');
        const maxLength = 80;

        function updateCharacterCount() {
            const currentLength = inputField.value.length;
            charCountDisplay.textContent = `${currentLength}/${maxLength}`;
            if (currentLength > maxLength) {
                charCountDisplay.style.color = 'red';
            } else {
                charCountDisplay.style.color = 'gray';
            }
        }

        inputField.addEventListener('input', updateCharacterCount);
        window.addEventListener('load', updateCharacterCount);

        const inputField2 = document.querySelector('[name="konten1"]');
        const charCountDisplay2 = document.getElementById('charCount2');
        const maxLength2 = 150;

        function updateCharacterCount2() {
            const currentLength2 = inputField2.value.length;
            charCountDisplay2.textContent = `${currentLength2}/${maxLength2}`;
            if (currentLength2 > maxLength2) {
                charCountDisplay2.style.color = 'red';
            } else {
                charCountDisplay2.style.color = 'gray';
            }
        }
        inputField2.addEventListener('input', updateCharacterCount2);
        window.addEventListener('load', updateCharacterCount2);
    </script>
    <!-- Akhir charCount -->

    <script src="https://cdn.jsdelivr.net/npm/froala-editor@3.2.6/js/froala_editor.pkgd.min.js"></script>
    
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            new FroalaEditor("#froalaEditor", {
            toolbarButtons: ['bold', 'italic', 'underline', 'fontSize', 'color', 'align', 'insertImage'],
            });
        });
    </script>

</div>
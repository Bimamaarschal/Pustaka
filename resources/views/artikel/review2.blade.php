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
                </a>/ {{ $artikel->judul }}
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
                            <span class="inline-block text-center py-1 px-2 text-xs leading-loose font-semibold mr-2
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
                                Artikel berstatus belum di review
                                @elseif ($artikel->review === 'Artikel telah di review')
                                Artikel berstatus sudah di review
                                @elseif ($artikel->review === 'Artikel terdapat kesalahan')
                                Artikel berstatus terdapat kesalahan
                                @elseif ($artikel->review === 'Artikel proses lebih lanjut')
                                Artikel berstatus proses review lebih lanjut
                                @else
                                Status review tidak valid
                                @endif
                            </span>
                        </div>

                        <h3 class=" font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-2 inline-block text-dark hover:text-primary">
                                {{ $artikel->judul }}
                        </h3>

                        <p class="text-base pb-2 text-body-color">
                            Penulis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $artikel->penulis }}
                        </p>

                        <p class="text-base pb-2 text-body-color">
                            Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $artikel->email }}
                        </p>

                        <p class="text-base pb-2 text-body-color">
                            Instansi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $artikel->instansi }}
                        </p>

                        <p class="text-base pb-2 text-body-color">
                            Keterangan&nbsp;: {{ $artikel->kataketerangan }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tampilan Keterangan Akhir -->

    <!-- Awal konversi -->
    <div class="py-2 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6  mb-10 lg:p-8 bg-white">

                    <h1 class="mt-2 text-2xl font-medium text-gray-900">
                        Melihat data dan konversi PDF
                    </h1>
                    <p class="mt-6 mb-10 text-gray-500 leading-relaxed">
                        Kami akan menambahkan data yang kirim ke tampilan PDF artikel berstandar
                    </p>

                    <iframe class="rounded-lg wow w-full h-50" src="{{ asset('storage/pdfartikel/' . $artikel->pdfhasil) }}" height="750"></iframe>
                    <div id="progressContainer" class="relative w-full h-4 rounded bg-gray-300">
                        <div id="progressBar" class="absolute top-0 left-0 h-4 bg-red-500 rounded" style="width: 0%;"></div>
                    </div>
                    
                    <form id="convertForm" method="POST" action="{{ route('artikels.convert') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $artikel->id }}">
                        <div id="buttonContainer" class="hidden mt-4">
                            <button type="submit" class="float-right mr-2 bg-red-500 mb-15 text-white px-6 py-2 rounded prev-step">
                                Konversi
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Akhir Konversi -->


    <script>
        function startProgressBar() {
        const progressBar = document.getElementById('progressBar');
        const progressContainer = document.getElementById('progressContainer');
        const buttonContainer = document.getElementById('buttonContainer');
        const myButton = document.getElementById('myButton');

        let width = 0;
        const interval = 1000; // 1 detik

        const timer = setInterval(() => {
            width += (100 / 5); // 5 detik total
            progressBar.style.width = `${width}%`;

            if (width >= 100) {
            clearInterval(timer);
            progressContainer.classList.add('hidden');
            buttonContainer.classList.remove('hidden');

            myButton.addEventListener('click', () => {
                alert('Tombol telah diklik!');
            });
            }
        }, interval);
        }

        startProgressBar();
    </script>

    <script>
        document.getElementById('convertForm').addEventListener('submit', function(event) {
            if (!confirm('Anda yakin ingin mengkonversi artikel ini menjadi PDF?')) {
                event.preventDefault();
            }
        });
    </script>

    <script>
        function showConfirmationModal() {
            document.getElementById('confirmationModal').classList.remove('hidden');
        }
        function hideConfirmationModal() {
            document.getElementById('confirmationModal').classList.add('hidden');
        }
    </script>

    <div id="confirmationModal"
        class="fixed inset-0 z-10 flex items-center justify-center w-full h-full bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 max-w-sm mx-auto">
            <p class="text-sm mb-4">Apakah Anda ingin mengirim artikel ini?</p>
            <div class="flex text-sm justify-end">
                <button onclick="hideConfirmationModal()"
                    class="px-4 py-2 mr-2 bg-red-500 hover:bg-red-600 text-white rounded">Tunggu</button>
                <a href="{{ route('artikels.index') }}"
                    class="px-4 py-2 mr-2 bg-green-500 hover:bg-green-600 text-white rounded">Ya, Kirim</a>
                <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST"
                    onsubmit="return confirm('Karena Anda pemilik tulisan Blog ini maka fitur hapus ini ditambahkan, apakah Anda yakin ingin menghapus data ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded">
                        Hapus
                    </button>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
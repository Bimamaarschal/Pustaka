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
                </a>/ Review / ID-{{ $artikel->noartikel }}
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
    <div class="py-2 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6  mb-10 lg:p-8 bg-white">

                    <h1 class="mt-2 text-2xl font-medium text-gray-900">
                        Melihat data dan konversi PDF
                    </h1>
                    <p class="mt-6 mb-10 text-gray-500 leading-relaxed">
                        Kami akan menambahkan data yang kirim ke tampilan PDF artikel berstandar, mohon tunggu lalu klik selanjutnya.
                    </p>

                    <div id="progressContainer" class="relative w-full h-4 rounded bg-gray-300">
                        <div id="progressBar" class="absolute top-0 left-0 h-4 bg-red-500 rounded" style="width: 0%;"></div>
                    </div>
                    
                    <form method="POST" action="{{ route('artikels.convert2') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{ $artikel->id }}">
                        <div id="buttonContainer" class="hidden mt-4">
                            <button type="submit" class="float-right mr-2 bg-red-500 mb-15 text-white px-6 py-2 rounded prev-step">
                                Selanjutnya
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
        const progressBar           = document.getElementById('progressBar');
        const progressContainer     = document.getElementById('progressContainer');
        const buttonContainer       = document.getElementById('buttonContainer');
        const myButton              = document.getElementById('myButton');

        let width                   = 0;
        const interval              = 1000;

        const timer = setInterval(() => {
            width += (100 / 5);
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

</x-app-layout>
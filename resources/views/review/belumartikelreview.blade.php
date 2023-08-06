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
                        <h1 class="text-2xl font-semibold font-medium text-dark-500" style="flex-grow: 1;">Artikel Anda</h1>

                        <a href="{{ route('artikels.edit', $artikel->id)}}" class="border mr-2 border-red-500 rounded text-red-500 px-2 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                            </svg>
                        </a>
                        <form action="{{ route('artikels.destroy', $artikel->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel Anda? data tidak bisa di kembalikan');">
                            @csrf @method('DELETE')
                            <button type="submit" class="border border-red-500 rounded text-red-500 px-2 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                    <path fill-rule="evenodd"
                                        d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
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
                        Kami telah menambahkan data dan menampilkan ke dalam bentuk PDF
                    </p>
                    <div class="m-10">
                        <iframe class=" rounded-2xl wow w-full h-50" src="{{ asset('storage/pdfartikel/' . $artikel->pdfhasil) }}" height="600"></iframe>
                    </div>
                    <a href="{{ route('artikels.kirimartikel', $artikel->id)}}" class=" next-step float-right bg-red-500 m-10  text-white px-6 py-2 rounded"> Kirim Artikel</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Akhir Konversi -->

</x-app-layout>
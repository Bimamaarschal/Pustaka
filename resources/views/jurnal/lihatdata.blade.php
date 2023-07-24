<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('jurnals.index') }}" class="text-red-500">
                    {{ __('Jurnal') }}
                </a>/ {{ $jurnal->judul }}
            </h2>
            @if(auth()->check() && $jurnal->nama_pengirim == auth()->user()->name)
            <div class="flex">
                <form action="{{ route('jurnals.destroy', $jurnal->id) }}" method="POST"
                    onsubmit="return confirm('Karena Anda pemilik tulisan Blog ini maka fitur hapus ini ditambahkan, apakah Anda yakin ingin menghapus data ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                        Hapus
                    </button>
                </form>
            </div>
            @endif

    </x-slot>
    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-ml sm:rounded-lg">

                <div class="flex items-center">
                    <img src="{{ url('storage/jurnal/' . $jurnal->image) }}" alt="image"
                        class=" object-cover object-center mr-4" style="width: 450px; height: 250px; " />

                    <div class=" ml-5  mr-5 ">
                        <div class="flex mb-5">
                            <span
                                class="bg-red-500 rounded inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-white mr-2">
                                {{ $jurnal->jenis }}
                            </span>
                            <span
                                class="bg-red-500 rounded inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-white mr-2">
                                {{ $jurnal->tanggalterbit }}
                            </span>
                            <span
                                class="bg-red-500 rounded inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-white mr-2">
                                {{ $jurnal->hak }}
                            </span>
                            <span class="inline-block text-center py-1 px-2 text-xs leading-loose font-semibold mr-2
                            @if ($jurnal->statusreview === 'belum di review')
                                    bg-red-500 text-white
                                @elseif ($jurnal->statusreview === 'jurnal telah di review')
                                    bg-green-500 text-white
                                @elseif ($jurnal->statusreview === 'jurnal terdapat kesalahan')
                                    bg-yellow-500 text-white
                                @elseif ($jurnal->statusreview === 'jurnal proses lebih lanjut')
                                    bg-yellow-500 text-white
                                @else
                                    bg-gray-500 text-white
                                @endif
                                rounded">
                                @if ($jurnal->statusreview === 'belum di review')
                                Jurnal berstatus belum di review
                                @elseif ($jurnal->statusreview === 'jurnal telah di review')
                                Jurnal berstatus sudah di review
                                @elseif ($jurnal->statusreview === 'jurnal terdapat kesalahan')
                                Jurnal berstatus terdapat kesalahan
                                @elseif ($jurnal->statusreview === 'jurnal proses lebih lanjut')
                                Jurnal berstatus proses review lebih lanjut
                                @else
                                Status review tidak valid
                                @endif
                            </span>
                        </div>

                        <h3>
                            <a href="blog-details.html" class="
                font-semibold
                text-xl
                sm:text-2xl
                lg:text-xl
                xl:text-2xl
                mb-2
                inline-block
                text-dark
                hover:text-primary
            ">
                                {{ $jurnal->judul }}
                            </a>
                        </h3>
                        <p class="text-base pb-2 text-body-color">
                            {{ $jurnal->konten1 }}
                        </p>
                        <p class="text-base pb-2 text-body-color">
                            Penulis&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: {{ $jurnal->penulis }}
                        </p>
                        <p class="text-base pb-2 text-body-color">
                            Keterangan&nbsp;: {{ $jurnal->keterangan }}
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="max-w-7xl pb-5 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-ml sm:rounded-lg">
            <section class="p-5">
                <div class="container grid md:grid-cols-2 gap-4">
                    <!-- Grid 1 - iframe -->
                    <div class="wow rounded-lg fadeInUp flex items-center bg-red-500 bg-opacity-50"
                        data-wow-delay=".1s">
                        <!-- Tambahkan kelas flex dan bg-opacity-50 -->
                        <iframe class="rounded-lg wow w-full h-50" src="{{ asset('storage/pdfjurnal/' . $jurnal->pdf) }}" height="750"></iframe>
                    </div>
                    <!-- Grid 2 - teks -->
                    <div class="flex flex-col justify-between">
                        <div class="pb-10">
                            <h2 class="text-xl font-semibold mb-4">Abstrak</h2>
                            <p class="text-xs text-gray-600 text-justify">{!! $jurnal->abstrak !!}</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

</x-app-layout>
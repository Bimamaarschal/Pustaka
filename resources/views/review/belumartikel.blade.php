<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            <a href="{{ route('timreview') }}" class="text-white">
                {{ __('Review') }}
            </a> / {{ __('Review Dokumen Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="p-10 lg:pt-[40px]">
                    <div class="container">

                        <h1 class="mb-10 md:text-[20px] text-dark-500 text-right">
                            {{ date('d M Y H:i:s') }}
                        </h1>

                        <div class="flex flex-wrap -mx-4">
                            @foreach ($artikels as $artikel)
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8" style="width: 350px; height: 220px;">
                                            <img src="{{ asset($artikel->image)  }}" alt="image" class="w-full object-cover object-center rounded" style=" height: 220px;">
                                    </div>
                                    <div>
                                        <span class=" bg-red-600 rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5 "> {{ $artikel->tanggal }} </span>
                                        <h3> <a href="{{ route('timreview.artikels.review', $artikel->id)}}" class="font-bold text-xl text-dark "> {{ $artikel->judul }} </a> </h3>
                                        <p class="text-base text-gray-500 pt-5"> {{ $artikel->kataketerangan }} </p>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </section>

                <div class="p-5 lg:p-8 bg-white border-b border-gray-200">
                    <div class="relative">
                        <div class="absolute bottom-0 right-0 p-2">
                            <nav aria-label="Page navigation example" class=" pr-2 pl-2 bottom-0 left-0 right-0">
                                <ul class="list-style-none flex">
                                    <li class=" pr-2 pl-2">
                                        @if ($artikels->onFirstPage())
                                        <a
                                            class="pointer-events-none relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 dark:text-neutral-400">Kembali</a>
                                        @else
                                        <a href="{{ $artikels->previousPageUrl() }}"
                                            class="relative block rounded bg-red-400 px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-red-700 dark:hover:text-white">Kembali</a>
                                        @endif
                                    </li>
                                    <!-- Tampilkan navigasi halaman -->
                                    @for ($page = 1; $page <= $artikels->lastPage(); $page++)
                                        @if ($page == $artikels->currentPage())
                                        <li aria-current="page" class=" pr-2 pl-2">
                                            <a class="relative block rounded bg-red-500 px-3 py-1.5 text-sm font-medium text-white transition-all duration-300"
                                                href="{{ $artikels->url($page) }}">{{ $page }}</a>
                                        </li>
                                        @else
                                        <li>
                                            <a class="relative block rounded bg-red-400  px-3 py-1.5 text-sm text-red-500 transition-all duration-300 hover:bg-red-100 dark:text-white dark:hover:bg-red-700 dark:hover:text-white"
                                                href="{{ $artikels->url($page) }}">{{ $page }}</a>
                                        </li>
                                        @endif
                                        @endfor
                                        <li class=" pr-2 pl-2">
                                            @if ($artikels->hasMorePages())
                                            <a href="{{ $artikels->nextPageUrl() }}"
                                                class="relative block rounded bg-red-400 px-3 py-1.5 text-sm text-red-500 transition-all duration-300 hover:bg-red-100 dark:text-white dark:hover:bg-red-700 dark:hover:text-white">Berikutnya</a>
                                            @else
                                            <a
                                                class="pointer-events-none relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 dark:text-neutral-400">Berikutnya</a>
                                            @endif
                                        </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layout>
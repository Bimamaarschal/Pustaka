<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="{{ route('jurnals.timreview') }}" class="text-red-500">
                {{ __('Review') }}
            </a> / {{ __('Review Dokumen Jurnal') }}
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
                            @foreach ($belums as $belum)
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8" style="width: 350px; height: 220px;">
                                        <a href="{{ route('jurnals.belumreview2', $belum->id) }}" class="block">
                                            <img src="{{ asset('storage/jurnal/' . $belum->image) }}" alt="image"
                                                class="w-full object-cover object-center rounded"
                                                style=" height: 220px;">
                                        </a>
                                    </div>
                                    <div>
                                        <span class="
                    bg-red-600
                    rounded
                    inline-block
                    text-center
                    py-1
                    px-4
                    text-xs
                    leading-loose
                    font-semibold
                    text-white
                    mb-5
                  ">
                                            {{ $belum->tanggalterbit }}
                                        </span>
                                        <h3>
                                            <a href="" class="
                      font-semibold
                      text-xl
                      sm:text-2xl
                      lg:text-xl
                      xl:text-2xl
                      mb-4
                      inline-block
                      text-dark
                      hover:text-primary
                    ">
                                                {{ $belum->judul }}
                                            </a>
                                        </h3>
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
                                        @if ($belums->onFirstPage())
                                        <a
                                            class="pointer-events-none relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 dark:text-neutral-400">Kembali</a>
                                        @else
                                        <a href="{{ $belums->previousPageUrl() }}"
                                            class="relative block rounded bg-red-400 px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-red-700 dark:hover:text-white">Kembali</a>
                                        @endif
                                    </li>
                                    <!-- Tampilkan navigasi halaman -->
                                    @for ($page = 1; $page <= $belums->lastPage(); $page++)
                                        @if ($page == $belums->currentPage())
                                        <li aria-current="page" class=" pr-2 pl-2">
                                            <a class="relative block rounded bg-red-500 px-3 py-1.5 text-sm font-medium text-white transition-all duration-300"
                                                href="{{ $belums->url($page) }}">{{ $page }}</a>
                                        </li>
                                        @else
                                        <li>
                                            <a class="relative block rounded bg-red-400  px-3 py-1.5 text-sm text-red-500 transition-all duration-300 hover:bg-red-100 dark:text-white dark:hover:bg-red-700 dark:hover:text-white"
                                                href="{{ $belums->url($page) }}">{{ $page }}</a>
                                        </li>
                                        @endif
                                        @endfor
                                        <li class=" pr-2 pl-2">
                                            @if ($belums->hasMorePages())
                                            <a href="{{ $belums->nextPageUrl() }}"
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
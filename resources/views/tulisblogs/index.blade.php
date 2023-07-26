<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Baca Blog') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="p-10 lg:pt-[40px]">
                    <div class="container">

                        <!-- Awal Text Slide -->
                        <div id="slide-container" class="slide-container" style="display: flex; justify-content: flex-end;">
                            <h1 class="mb-5 md:text-[20px] text-dark-500 relative" id="slide-content" style="animation: slide 10s linear infinite;">
                                <span class="pr-2">{{ $tulisblogs[0]->judul }}</span>
                            </h1>
                            <h1 class="mb-5 ml-2 md:text-[20px] text-dark-500 relative">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                </svg>
                            </h1>
                        </div>

                        <script>
                        const blogTitles = @json($tulisblogs->pluck('judul'));
                        function changeSlideContent() {
                            const slideContent = document.getElementById("slide-content");
                            let currentIndex = 0;

                            setInterval(() => {
                                slideContent.textContent = blogTitles[currentIndex];
                                currentIndex = (currentIndex + 1) % blogTitles.length;
                            }, 2000);
                        }
                        changeSlideContent();
                        </script>

                        <!-- Akhir Text Slide -->

                        <!-- Awal Konten -->
                        <div class="flex flex-wrap -mx-4">
                            @foreach ($tulisblogs as $tulisblog)
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8" style="width: 350px; height: 220px;">
                                        <a href="{{ route('tulisblogs.show', $tulisblog->id) }}" class="block">
                                            <img src="{{ asset($tulisblog->image) }}" alt="image"
                                                class="w-full object-cover object-center rounded"
                                                style=" height: 220px;">
                                        </a>
                                    </div>
                                    <div>
                                        <span
                                            class="bg-red-600 rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">
                                            {{ $tulisblog->tanggal }}
                                        </span>
                                        <h3>
                                            <a href="{{ route('tulisblogs.show', $tulisblog->id) }}"
                                                class="font-bold text-xl text-dark ">
                                                {{ $tulisblog->judul }}
                                            </a>
                                        </h3>
                                        <p class="text-base text-gray-500 pt-2">
                                            {{ $tulisblog->konten1 }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Akhir Konten -->
                    </div>
                </section>

                <!-- Awal Pagination -->
                <div class="p-5 lg:p-8 bg-white border-b border-gray-200">
                    <div class="relative">
                        <div class="absolute bottom-0 right-0 p-2">
                            <nav aria-label="Page navigation example" class=" pr-2 pl-2 bottom-0 left-0 right-0">
                                <ul class="list-style-none flex">
                                        <li class=" pr-1 pl-1">
                                        @if ($tulisblogs->onFirstPage())
                                        <a
                                            class="pointer-events-none relative block rounded bg-transparent px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 dark:text-neutral-400">Kembali</a>
                                        @else
                                        <a href="{{ $tulisblogs->previousPageUrl() }}"
                                            class="relative block rounded bg-red-400 px-3 py-1.5 text-sm text-neutral-500 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-red-700 dark:hover:text-white">Kembali</a>
                                        @endif
                                        </li>
                                        @for ($page = 1; $page <= $tulisblogs->lastPage(); $page++)
                                        @if ($page == $tulisblogs->currentPage())
                                        <li aria-current="page" class=" pr-1 pl-1">
                                            <a class="relative block rounded bg-red-500 px-3 py-1.5 text-sm font-medium text-white transition-all duration-300"
                                                href="{{ $tulisblogs->url($page) }}">{{ $page }}</a>
                                        </li>
                                        @else
                                        <li class=" pr-1 pl-1">
                                            <a class="relative block rounded bg-red-400  px-3 py-1.5 text-sm text-red-500 transition-all duration-300 hover:bg-red-100 dark:text-white dark:hover:bg-red-700 dark:hover:text-white"
                                                href="{{ $tulisblogs->url($page) }}">{{ $page }}</a>
                                        </li>
                                        @endif
                                        @endfor
                                        <li class=" pr-1 pl-1">
                                            @if ($tulisblogs->hasMorePages())
                                            <a href="{{ $tulisblogs->nextPageUrl() }}"
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
                <!-- Akhir Pagination -->

            </div>
        </div>
    </div>
</x-app-layout>
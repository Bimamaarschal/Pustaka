<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <section class="p-10">
                    <div class="container">
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full px-4">
                                <div class="mb-12 lg:mb-15">
                                    <div class="pb-10"
                                        style="display: flex; justify-content: space-between; align-items: center;">
                                        <h1 class="text-2xl font-medium text-dark-500" style="flex-grow: 1;">
                                            Pilihan Tema artikels
                                        </h1>
                                        <a href="{{ route('artikels.create')}}"
                                            class="bg-red-500 mb-15 text-white px-6 py-2 rounded">Ajukan artikel Baru</a>
                                    </div>
                                    <p class="
                                                text-lg
                                                sm:text-xl
                                                leading-relaxed
                                                md:text-[15px]
                                                sm:leading-relaxed
                                                text-gray-600
                                                ">
                                        Selamat datang di PUSTAKA artikel, Nikmati fitur artikel
                                        yang menyediakan akses mudah ke ribuan artikel terkini dari berbagai bidang
                                        ilmu.<br>
                                        Baca artikel online dari kenyamanan rumah Anda dan berkontribusi dengan
                                        partisipasi tambah artikel untuk berbagi pengetahuan orisinal.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-5 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-red-500
                  rounded-md
                  mb-8
                  relative
                  z-10
                ">
                                        <span class="
                    w-[70px]
                    h-[70px]
                    flex
                    items-center
                    justify-center
                    bg-red-500 bg-opacity-20
                    rounded-md
                    mb-5
                    absolute
                    z-[-1]
                    top-0
                    left-0
                    rotate-[0deg]
                    group-hover:rotate-45
                    duration-300
                  "></span>

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                                        </svg>

                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Teknologi
                                    </h4>
                                    <p class=" text-gray-500 mb-8 lg:mb-11 md:text-[15px]">
                                        Halaman berisi kumpulan artikel dengan tema/kategori teknologi.
                                    </p>
                                    <p class="mt-4 text-sm">
                                        <a href="{{ route('tulisblogs.index') }}"
                                            class="inline-flex items-center font-semibold">
                                            Baca Sekarang
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                class="ml-1 w-5 h-5 ">
                                                <path fill-rule="evenodd"
                                                    d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".15s">
                                    <div class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-red-500
                  rounded-md
                  mb-8
                  relative
                  z-10
                ">
                                        <span class="
                    w-[70px]
                    h-[70px]
                    flex
                    items-center
                    justify-center
                    bg-red-500 bg-opacity-20
                    rounded-md
                    mb-5
                    absolute
                    z-[-1]
                    top-0
                    left-0
                    rotate-[0deg]
                    group-hover:rotate-45
                    duration-300
                  "></span>

                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z" />
                                        </svg>

                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Bisnis
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[15px]">
                                        Halaman berisi kumpulan artikel dengan tema/kategori bisnis.
                                    </p>
                                    <p class="mt-4 text-sm">
                                        <a href="https://laravel.com/docs"
                                            class="inline-flex items-center font-semibold">
                                            Baca Sekarang
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                class="ml-1 w-5 h-5 ">
                                                <path fill-rule="evenodd"
                                                    d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".2s">
                                    <div class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-red-500
                  rounded-md
                  mb-8
                  relative
                  z-10
                ">
                                        <span class="
                    w-[70px]
                    h-[70px]
                    flex
                    items-center
                    justify-center
                    bg-red-500 bg-opacity-20
                    rounded-md
                    mb-5
                    absolute
                    z-[-1]
                    top-0
                    left-0
                    rotate-[0deg]
                    group-hover:rotate-45
                    duration-300
                  "></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Ekonomi
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[15px]">
                                        Halaman berisi kumpulan artikel dengan tema/kategori ekonomi.
                                    </p>
                                    <p class="mt-4 text-sm">
                                        <a href="https://laravel.com/docs"
                                            class="inline-flex items-center font-semibold">
                                            Baca Sekarang
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                class="ml-1 w-5 h-5 ">
                                                <path fill-rule="evenodd"
                                                    d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".25s">
                                    <div class="
                  w-[70px]
                  h-[70px]
                  flex
                  items-center
                  justify-center
                  bg-red-500
                  rounded-md
                  mb-8
                  relative
                  z-10
                ">
                                        <span class="
                    w-[70px]
                    h-[70px]
                    flex
                    items-center
                    justify-center
                    bg-red-500 bg-opacity-20
                    rounded-md
                    mb-5
                    absolute
                    z-[-1]
                    top-0
                    left-0
                    rotate-[0deg]
                    group-hover:rotate-45
                    duration-300
                  "></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 7.5l16.5-4.125M12 6.75c-2.708 0-5.363.224-7.948.655C2.999 7.58 2.25 8.507 2.25 9.574v9.176A2.25 2.25 0 004.5 21h15a2.25 2.25 0 002.25-2.25V9.574c0-1.067-.75-1.994-1.802-2.169A48.329 48.329 0 0012 6.75zm-1.683 6.443l-.005.005-.006-.005.006-.005.005.005zm-.005 2.127l-.005-.006.005-.005.005.005-.005.005zm-2.116-.006l-.005.006-.006-.006.005-.005.006.005zm-.005-2.116l-.006-.005.006-.005.005.005-.005.005zM9.255 10.5v.008h-.008V10.5h.008zm3.249 1.88l-.007.004-.003-.007.006-.003.004.006zm-1.38 5.126l-.003-.006.006-.004.004.007-.006.003zm.007-6.501l-.003.006-.007-.003.004-.007.006.004zm1.37 5.129l-.007-.004.004-.006.006.003-.004.007zm.504-1.877h-.008v-.007h.008v.007zM9.255 18v.008h-.008V18h.008zm-3.246-1.87l-.007.004L6 16.127l.006-.003.004.006zm1.366-5.119l-.004-.006.006-.004.004.007-.006.003zM7.38 17.5l-.003.006-.007-.003.004-.007.006.004zm-1.376-5.116L6 12.38l.003-.007.007.004-.004.007zm-.5 1.873h-.008v-.007h.008v.007zM17.25 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zm0 4.5a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                        </svg>

                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Sejarah
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[15px]">
                                        Halaman berisi kumpulan artikel dengan tema/kategori sejarah.
                                    </p>
                                    <p class="mt-4 text-sm">
                                        <a href="https://laravel.com/docs"
                                            class="inline-flex items-center font-semibold">
                                            Baca Sekarang
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                class="ml-1 w-5 h-5 ">
                                                <path fill-rule="evenodd"
                                                    d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ====== Blog Section Start -->
                <section class="p-10 lg:pt-[5px]">
                    <div class="container">
                        <h1 class="mb-10 text-2xl font-medium text-dark-900">
                            Kumpulan artikel Tereview
                        </h1>
                        <div class="flex flex-wrap -mx-4">
                            @foreach ($artikels as $artikel)
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8" style="width: 350px; height: 220px;">
                                        <a href="{{ route('artikels.lihatdata', $artikel->id) }}" class="block">
                                            <img src="{{ asset('storage/artikel/' . $artikel->image) }}" alt="image"
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
                                            {{ $artikel->tanggalterbit }}
                                        </span>
                                        <h3>
                                            <!-- <a href="{{ route('artikels.lihatdata', $artikel->id) }}" class="
                      font-semibold
                      text-xl
                      sm:text-2xl
                      lg:text-xl
                      xl:text-2xl
                      mb-4
                      inline-block
                      text-dark
                      hover:text-primary
                    "> -->
                                                {{ $artikel->judul }}
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            {{ $artikel->keterangan }}
                                        </p>
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
                <!-- ====== Blog Section End -->
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Pustaka') }}
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
                                    <h1 class="mb-5 text-2xl font-medium text-dark-900">
                                        Pilih Bacaan
                                    </h1>
                                    <p
                                        class=" text-lg sm:text-xl leading-relaxed md:text-[15px] sm:leading-relaxed text-gray-500 ">
                                        Dalam lembaran-lembaran itu tersembunyi keajaiban yang siap memikat pikiran dan
                                        merentangkan
                                        sayap imajinasi Anda.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Awal blog -->
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-5 group wow fadeInUp" data-wow-delay=".1s">
                                    <div
                                        class=" w-[70px] h-[70px] flex items-center justify-center  bg-red-500 rounded-md mb-8 relative z-10">
                                        <span
                                            class="w-[70px] h-[70px] flex items-center justify-center bg-red-500 bg-opacity-20 rounded-md mb-5 absolute z-[-1] top-0 left-0 rotate-[0deg] group-hover:rotate-45 duration-300"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Blog
                                    </h4>
                                    <p class=" text-gray-500 mb-8 lg:mb-11 md:text-[13px]">
                                        Blog merupakan jendela digital yang membuka pintu dunia pengetahuan dan
                                        kreativitas dari berbagai sudut pandang pemikiran.
                                    </p>
                                    <p class="mt-2 text-sm">
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
                            <!-- Akhir blog -->

                            <!-- Awal ilmiah paper -->
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".15s">
                                    <div
                                        class=" w-[70px] h-[70px] flex items-center justify-center bg-red-500 rounded-md mb-8 relative z-10">
                                        <span
                                            class=" w-[70px] h-[70px] flex items-cente justify-center bg-red-500 bg-opacity-20 rounded-md mb-5  absolute z-[-1] top-0 left-0 rotate-[0deg] group-hover:rotate-45 duration-300"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Ilmiah Paper
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[13px]">
                                        Sebuah panggung yang mengilhami dan merangkul seluruh dunia untuk mengejar
                                        kebenaran dan membuka
                                        pintu bagi inovasi yang tak terbatas.
                                    </p>
                                    <!-- Button -->
                                </div>
                            </div>
                            <!-- Akhir ilmiah paper -->

                            <!-- Awal finasial strategi -->
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".2s">
                                    <div
                                        class=" w-[70px] h-[70px] flex items-center justify-center bg-red-500 rounded-md mb-8 relative  z-10">
                                        <span
                                            class=" w-[70px] h-[70px] flex items-center justify-center bg-red-500 bg-opacity-20 rounded-md mb-5 absolute z-[-1] top-0 left-0 rotate-[0deg] group-hover:rotate-45 duration-300"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Finansial Strategi
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[13px]">
                                        Tampilan finansial strategi adalah landasan yang kokoh bagi kesuksesan dan
                                        pertumbuhan keuangan.
                                        Rencana terperinci dengan hati-hati dijelaskan.
                                    </p>
                                    <!-- Button -->
                                </div>
                            </div>
                            <!-- Akhir finansial strategi -->

                            <!-- Awal berita -->
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".25s">
                                    <div
                                        class=" w-[70px] h-[70px] flex items-center justify-center bg-red-500 rounded-md mb-8 relative z-10">
                                        <span class=" w-[70px] h-[70px] flex items-center justify-center bg-red-500 bg-opacity-20 rounded-md mb-5 absolute z-[-1]  top-0 left-0 rotate-[0deg] group-hover:rotate-45 duration-300
                                        "></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Berita
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[13px]">
                                        Berita adalah jendela interaktif ke dunia informasi yang cepat dan
                                        dinamis. Jurnalisme berkualitas & sumber informasi kredibel.
                                    </p>
                                    <p class="mt-2 text-sm">
                                        <a href="{{ route('beritas.index') }}"
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
                            <!-- Akhir berita -->

                        </div>
                    </div>
                </section>
                
                <section class="p-10 pt-0">
                    <div class="container">
                        <!-- Awal blog -->
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-5 group wow fadeInUp" data-wow-delay=".1s">
                                    <div
                                        class=" w-[70px] h-[70px] flex items-center justify-center  bg-red-500 rounded-md mb-8 relative z-10">
                                        <span
                                            class="w-[70px] h-[70px] flex items-center justify-center bg-red-500 bg-opacity-20 rounded-md mb-5 absolute z-[-1] top-0 left-0 rotate-[0deg] group-hover:rotate-45 duration-300"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Blog
                                    </h4>
                                    <p class=" text-gray-500 mb-8 lg:mb-11 md:text-[13px]">
                                        Blog merupakan jendela digital yang membuka pintu dunia pengetahuan dan
                                        kreativitas dari berbagai sudut pandang pemikiran.
                                    </p>
                                    <p class="mt-2 text-sm">
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
                            <!-- Akhir blog -->

                            <!-- Awal ilmiah paper -->
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".15s">
                                    <div
                                        class=" w-[70px] h-[70px] flex items-center justify-center bg-red-500 rounded-md mb-8 relative z-10">
                                        <span
                                            class=" w-[70px] h-[70px] flex items-cente justify-center bg-red-500 bg-opacity-20 rounded-md mb-5  absolute z-[-1] top-0 left-0 rotate-[0deg] group-hover:rotate-45 duration-300"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Ilmiah Paper
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[13px]">
                                        Sebuah panggung yang mengilhami dan merangkul seluruh dunia untuk mengejar
                                        kebenaran dan membuka
                                        pintu bagi inovasi yang tak terbatas.
                                    </p>
                                    <!-- Button -->
                                </div>
                            </div>
                            <!-- Akhir ilmiah paper -->

                            <!-- Awal finasial strategi -->
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".2s">
                                    <div
                                        class=" w-[70px] h-[70px] flex items-center justify-center bg-red-500 rounded-md mb-8 relative  z-10">
                                        <span
                                            class=" w-[70px] h-[70px] flex items-center justify-center bg-red-500 bg-opacity-20 rounded-md mb-5 absolute z-[-1] top-0 left-0 rotate-[0deg] group-hover:rotate-45 duration-300"></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Finansial Strategi
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[13px]">
                                        Tampilan finansial strategi adalah landasan yang kokoh bagi kesuksesan dan
                                        pertumbuhan keuangan.
                                        Rencana terperinci dengan hati-hati dijelaskan.
                                    </p>
                                    <!-- Button -->
                                </div>
                            </div>
                            <!-- Akhir finansial strategi -->

                            <!-- Awal berita -->
                            <div class="w-full md:w-1/2 lg:w-1/4 px-4">
                                <div class="bg-white mb-12 group wow fadeInUp" data-wow-delay=".25s">
                                    <div
                                        class=" w-[70px] h-[70px] flex items-center justify-center bg-red-500 rounded-md mb-8 relative z-10">
                                        <span class=" w-[70px] h-[70px] flex items-center justify-center bg-red-500 bg-opacity-20 rounded-md mb-5 absolute z-[-1]  top-0 left-0 rotate-[0deg] group-hover:rotate-45 duration-300
                                        "></span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="white" stroke-width="1.5" width="35" height="35">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Artikel
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[13px]">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    </p>
                                    <p class="mt-2 text-sm">
                                        <a href="{{ route('artikels.index') }}"
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
                            <!-- Akhir berita -->

                        </div>
                    </div>
                </section>


                <!-- Awal bacaan blog populer -->
                <section class="p-10 lg:pt-[5px]">
                    <div class="container">
                        <div class="flex items-center mb-10 text-2xl font-medium text-dark-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 ml-2 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                            </svg>
                            <span>
                                Bacaan Blog Populer
                            </span>
                        </div>

                        <div class="flex flex-wrap -mx-4">

                            <!-- Elemen 1 -->
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/1.jpg" alt="image"
                                                class=" w-full transition group-hover:scale-125 group-hover:rotate-6" />
                                        </a>
                                    </div>
                                    <div>
                                        <span
                                            class=" bg-red-600 rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5 ">
                                            Jul 22, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="font-bold text-xl text-dark ">
                                                Lorem Ipsum is simply dummy text
                                            </a>
                                        </h3>
                                        <p class="text-base text-gray-500 pt-5">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir elemen 1 -->
                            
                        </div>
                    </div>
                </section>
                <!-- Akhir bacaan blog populer -->

                <!-- Awal bacaan paper populer -->
                <section class="p-10 lg:pt-[1px]">
                    <div class="container">
                        <div class="flex items-center mb-10 text-2xl font-medium text-dark-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                            </svg>
                            <span>
                                Bacaan Paper Populer
                            </span>
                        </div>

                        <div class="flex flex-wrap -mx-4">

                            <!-- Elemen 1 -->
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/1.jpg" alt="image"
                                                class=" w-full transition group-hover:scale-125 group-hover:rotate-6" />
                                        </a>
                                    </div>
                                    <div>
                                        <span
                                            class=" bg-red-600 rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5 ">
                                            Jul 22, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="font-bold text-xl text-dark ">
                                                Lorem Ipsum is simply dummy text
                                            </a>
                                        </h3>
                                        <p class="text-base text-gray-500 pt-5">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir elemen 1 -->

                        </div>
                    </div>
                </section>
                <!-- Akhir bacaan paper populer -->

                <!-- Awal bacaan finansial strategi populer -->
                <section class="p-10 lg:pt-[1px]">
                    <div class="container">
                        <div class="flex items-center mb-10 text-2xl font-medium text-dark-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>
                                Bacaan Finansial Strategi Populer
                            </span>
                        </div>

                        <div class="flex flex-wrap -mx-4">

                            <!-- Elemen 1 -->
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/1.jpg" alt="image"
                                                class=" w-full transition group-hover:scale-125 group-hover:rotate-6" />
                                        </a>
                                    </div>
                                    <div>
                                        <span
                                            class=" bg-red-600 rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5 ">
                                            Jul 22, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="font-bold text-xl text-dark ">
                                                Lorem Ipsum is simply dummy text
                                            </a>
                                        </h3>
                                        <p class="text-base text-gray-500 pt-5">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir elemen 1 -->

                        </div>
                    </div>
                </section>
                <!-- Akhir bacaan finansial strategi populer -->

                <!-- Awal bacaan berita populer -->
                <section class="p-10 lg:pt-[1px]">
                    <div class="container">
                        <div class="flex items-center mb-10 text-2xl font-medium text-dark-900">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                            </svg>
                            <span>
                                Bacaan Berita Populer
                            </span>
                        </div>

                        <div class="flex flex-wrap -mx-4">

                            <!-- Elemen 1 -->
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/1.jpg" alt="image"
                                                class=" w-full transition group-hover:scale-125 group-hover:rotate-6" />
                                        </a>
                                    </div>
                                    <div>
                                        <span
                                            class=" bg-red-600 rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5 ">
                                            Jul 22, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="font-bold text-xl text-dark ">
                                                Lorem Ipsum is simply dummy text
                                            </a>
                                        </h3>
                                        <p class="text-base text-gray-500 pt-5">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Akhir elemen 1 -->

                        </div>
                    </div>
                </section>
                <!-- Akhir bacaan berita populer -->

            </div>
        </div>
    </div>
</x-app-layout>
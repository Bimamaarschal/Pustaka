<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Jurnal') }}
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
                                            Pilihan Tema Jurnal
                                        </h1>
                                        <a href="{{ route('jurnals.create')}}"
                                            class="bg-red-500 mb-15 text-white px-6 py-2 rounded">Ajukan Jurnal Baru</a>
                                    </div>
                                    <p class="
                                                text-lg
                                                sm:text-xl
                                                leading-relaxed
                                                md:text-[15px]
                                                sm:leading-relaxed
                                                text-dark-500
                                                ">
                                        Selamat datang di PUSTAKA Jurnal, Nikmati fitur jurnal
                                        yang menyediakan akses mudah ke ribuan jurnal terkini dari berbagai bidang ilmu.
                                        Baca jurnal online dari kenyamanan rumah Anda dan berkontribusi dengan
                                        partisipasi tambah jurnal untuk berbagi pengetahuan orisinal. Mari bersama-sama
                                        menciptakan perubahan dan menerangi pengetahuan demi kemajuan ilmu pengetahuan
                                        dan kebermanfaatan umat manusia.
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
                                                d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Blog
                                    </h4>
                                    <p class=" text-gray-500 mb-8 lg:mb-11 md:text-[15px]">
                                        Blog merupakan jendela digital yang membuka pintu dunia pengetahuan dan
                                        kreativitas dari berbagai sudut pandang pemikiran.
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
                                                d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Ilmiah Paper
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[15px]">
                                        Sebuah panggung yang mengilhami dan merangkul seluruh dunia untuk mengejar
                                        kebenaran dan membuka
                                        pintu bagi inovasi yang tak terbatas.
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
                                        Finansial Strategi
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[15px]">
                                        Tampilan finansial strategi adalah landasan yang kokoh bagi kesuksesan dan
                                        pertumbuhan keuangan.
                                        Rencana terperinci dengan hati-hati dijelaskan.
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
                                                d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Berita
                                    </h4>
                                    <p class="text-gray-500 mb-8 lg:mb-11 md:text-[15px]">
                                        Berita adalah jendela interaktif ke dunia informasi yang cepat dan
                                        dinamis. Jurnalisme berkualitas & sumber informasi kredibel.
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
                            Koleksi Jurnal Populer
                        </h1>
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/1.jpg" alt="image" class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    " />
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
                                            Dec 22, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="
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
                                                Meet AutoManage, the best AI management tools
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".15s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/2.jpg" alt="image" class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    " />
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
                                            Mar 15, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="
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
                                                How to earn more money as a wellness coach
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".2s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/3.jpg" alt="image" class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    " />
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
                                            Jan 05, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="
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
                                                The no-fuss guide to upselling and cross selling
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/4.jpg" alt="image" class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    " />
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
                                            Mar 15, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="
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
                                                How to earn more money as a wellness coach
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".15s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/1.jpg" alt="image" class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    " />
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
                                            Jan 05, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="
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
                                                The no-fuss guide to upselling and cross selling
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".2s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/2.jpg" alt="image" class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    " />
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
                                            Dec 22, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="
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
                                                Meet AutoManage, the best AI management tools
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/3.jpg" alt="image" class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    " />
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
                                            Dec 22, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="
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
                                                Meet AutoManage, the best AI management tools
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".15s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/2.jpg" alt="image" class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    " />
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
                                            Mar 15, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="
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
                                                How to earn more money as a wellness coach
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".2s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                            <img src="image/pustaka/1.jpg" alt="image" class="
                      w-full
                      transition
                      group-hover:scale-125 group-hover:rotate-6
                    " />
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
                                            Jan 05, 2023
                                        </span>
                                        <h3>
                                            <a href="blog-details.html" class="
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
                                                The no-fuss guide to upselling and cross selling
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            Lorem Ipsum is simply dummy text of the printing and
                                            typesetting industry.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ====== Blog Section End -->
            </div>
        </div>
    </div>
</x-app-layout>
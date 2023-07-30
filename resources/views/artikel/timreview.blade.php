<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tim Review') }}
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
                                            Tersedia dokumen untuk di Review
                                        </h1>

                                    </div>
                                    <p class="
                                                text-lg
                                                sm:text-xl
                                                leading-relaxed
                                                md:text-[15px]
                                                sm:leading-relaxed
                                                text-dark-500
                                                ">
                                        Kami mengundang para ahli, akademisi, dan praktisi di bidang terkait untuk ikut
                                        serta dalam proses review. Setiap kontribusi dari para reviewer sangat berharga
                                        dalam memperbaiki dan memperkaya konten dari dokumen-dokumen ini.<br><br>
                                        Kami percaya bahwa peninjauan dokumen ilmiah merupakan tahap kritis dalam proses
                                        publikasi ilmiah.
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
                                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                        </svg>

                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Jurnal
                                    </h4>
                                    <p class=" text-gray-500 mb-8 lg:mb-11 md:text-[15px]">
                                        Jurnal-jurnal ini mencakup beragam topik dan penelitian yang relevan dengan
                                        berbagai bidang ilmu.
                                    </p>
                                    <p class="mt-4 text-sm">
                                        <a href="{{ route('jurnals.belumreview') }}"
                                            class="inline-flex items-center font-semibold">
                                            Lihat Dokumen
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
                                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Ilmiah Paper
                                    </h4>

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
                                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Finansial Strategi
                                    </h4>

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
                                                d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
                                        </svg>
                                    </div>
                                    <h4 class="font-bold text-xl text-dark mb-3">
                                        Berita
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</x-app-layout>
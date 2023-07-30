
<!-- Awal teks atas -->
<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <h1 class="mt-3 text-2xl font-medium text-gray-900">
        Pilih fitur yang Anda ingin tulis
    </h1>
    <p class="text-lg sm:text-xl leading-relaxed md:text-[15px] sm:leading-relaxed text-gray-600 pb-5 pt-5">
                Pertimbangkan kegunaan dan relevansi fitur tersebut
                 dengan fokus pada kebutuhan Anda. Prioritaskan fitur yang
                mendukung kolaborasi, kemudahan penggunaan, dan meningkatkan 
                visibilitas tulisan karya ilmiah Anda. </p>
</div>
<!-- Akhir teks atas -->

<!-- Awal Pilihan Tulis -->
<div class="bg-gray-200 mb-10 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">

    <!-- Awal Tulis Blog -->
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Blog</a>
            </h2>
        </div>
        <p  class="mt-4 text-sm leading-relaxed text-gray-500  md:text-[13px]">
            Fitur menulis blog di PUSTAKA memungkinkan Anda untuk berbagi pandangan, wawasan, dan pemikiran Anda melalui
            tulisan blog yang menarik, memberikan kesempatan untuk berinteraksi dengan komunitas yang berbagi minat.
        </p>
        <p class="mt-4 text-sm">
            <a href="{{ route('tulisblogs.create') }}" class="inline-flex items-center font-semibold">
                Langsung Menulis
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 ">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
    <!-- Akhir Tulis Blog -->

    <!-- Awal Tulis Paper -->
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://laracasts.com">Ilmiah Paper</a>
            </h2>
        </div>
        <p class="mt-4 text-sm leading-relaxed text-gray-500  md:text-[13px]">
            Fitur menulis ilmiah paper di PUSTAKA memungkinkan Anda untuk menyusun dan menyampaikan penelitian ilmiah
            Anda dengan format yang sesuai, memperkuat kontribusi Anda dalam masyarakat akademik.
        </p>
        <p class="mt-4 text-sm">
            <a href="{{ route('tulisblogs.create') }}" class="inline-flex items-center font-semibold">
                Langsung Menulis
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 ">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
    <!-- Akhir Tulis Paper -->

    <!-- Awal Tulis Strategi -->
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="https://tailwindcss.com/">Finansial Strategi</a>
            </h2>
        </div>
        <p class="mt-4 text-sm leading-relaxed text-gray-500  md:text-[13px]">
            Fitur menulis strategi finansial di PUSTAKA memungkinkan Anda untuk berbagi wawasan, tips, dan panduan dalam
            mengelola keuangan dengan bijak, membantu orang lain untuk mencapai kestabilan keuangan yang lebih baik.
        </p>
        <p class="mt-4 text-sm">
            <a href="{{ route('tulisblogs.create') }}" class="inline-flex items-center font-semibold">
                Langsung Menulis
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 ">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
    <!-- Akhir Tulis Strategi -->


    <!-- Awal Tulis Artikel -->
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                Artikel
            </h2>
        </div>
        <p class="mt-4 text-sm leading-relaxed text-gray-500  md:text-[13px]">
            Fitur menulis artikel di PUSTAKA memungkinkan Anda untuk menginformasikan dan menyebarkan artikel Anda terkini
            dengan akurat dan objektif, memberikan wawasan yang bernilai kepada pembaca.
        </p>
        <p class="mt-4 text-sm">
            <a href="{{ route('tulisblogs.create') }}" class="inline-flex items-center font-semibold">
                Langsung Menulis
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 ">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
    <!-- Akhir Tulis Artikel -->

</div>
<!-- Akhir Pilihan Tulis -->

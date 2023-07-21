<!-- Tampilan Atas -->
<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo class="block h-12 w-auto" />

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        Selamat Datang di Pustaka {{ Auth::user()->name }}
    </h1>
    <p class="mt-6 md:text-[15px] text-justify text-gray-500 leading-relaxed">
        Tempat yang tepat untuk menjelajahi dunia tulisan karya ilmiah. Di sini, Anda akan menemukan repositori <br>
        yang kaya akan pengetahuan dan ide-ide brilian yang dituangkan dalam tulisan ilmiah.<br><br>
        PUSTAKA hadir untuk memfasilitasi akses dan penyebaran karya-karya berharga dari para peneliti, akademisi,<br>
        dan penceramah di seluruh dunia. Kami berkomitmen untuk menyediakan platform yang memberikan nilai tambah, <br>
        mendukung kolaborasi, dan mempromosikan pembelajaran seumur hidup.
    </p>
</div>

<!-- Tampilan Tengah -->
<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3.75 9.776c.112-.017.227-.026.344-.026h15.812c.117 0 .232.009.344.026m-16.5 0a2.25 2.25 0 00-1.883 2.542l.857 6a2.25 2.25 0 002.227 1.932H19.05a2.25 2.25 0 002.227-1.932l.857-6a2.25 2.25 0 00-1.883-2.542m-16.5 0V6A2.25 2.25 0 016 3.75h3.879a1.5 1.5 0 011.06.44l2.122 2.12a1.5 1.5 0 001.06.44H18A2.25 2.25 0 0120.25 9v.776" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="{{ route('pustaka') }}">Pustaka</a>
            </h2>
        </div>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            PUSTAKA adalah sebuah repositori tulisan karya ilmiah yang memberikan akses mudah, memungkinkan kolaborasi
            antarpeneliti, dan mendorong penyebaran pengetahuan untuk memajukan dunia akademik dan ilmiah.
        </p>
        <p class="mt-4 text-sm">
            <a href="{{ route('pustaka') }}" class="inline-flex items-center font-semibold">
                Jelajahi Dokumen
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 ">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
            </svg>
            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="{{ route('tulis') }}">Tulis</a>
            </h2>
        </div>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Fitur tulis di PUSTAKA memungkinkan Anda untuk dengan mudah mengunggah dan mempublikasikan karya ilmiah
            Anda, berbagi pengetahuan dengan komunitas yang luas, serta mendapatkan pengakuan dan kolaborasi dari
            peneliti lainnya.
        </p>
        <p class="mt-4 text-sm">
            <a href="{{ route('tulis') }}" class="inline-flex items-center font-semibold">
                Memulai menulis

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 ">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
            </svg>

            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="{{ route('buku') }}">Buku</a>
            </h2>
        </div>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            Fitur buku di PUSTAKA memungkinkan Anda menjelajahi dan mengakses beragam koleksi buku karya ilmiah yang
            memberikan wawasan mendalam dalam berbagai bidang pengetahuan.
        </p>
        <p class="mt-4 text-sm">
            <a href="{{ route('buku') }}" class="inline-flex items-center font-semibold">
                Cari buku yang tepat

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 ">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
    <div>
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
            </svg>

            <h2 class="ml-3 text-xl font-semibold text-gray-900">
                <a href="{{ route('jurnal') }}">Jurnal</a>
            </h2>
        </div>
        <p class="mt-4 text-gray-500 text-sm leading-relaxed"> Fitur jurnal di PUSTAKA menyediakan akses ke
            jurnal-jurnal ilmiah yang terkini, memperkaya pemahaman Anda dengan penelitian terbaru dari berbagai
            disiplin ilmu.
        </p>
        <p class="mt-4 text-sm">
            <a href="{{ route('jurnal') }}" class="inline-flex items-center font-semibold">
                Cari jurnal yang tepat

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ml-1 w-5 h-5 ">
                    <path fill-rule="evenodd"
                        d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>
</div>


<!-- Tampilan Bawah -->
<div class="p-12 lg:p-8 bg-white border-b border-gray-200">
    <p class="mt-6 pb-20 md:text-[15px] text-gray-400 leading-relaxed">
        *Jika Anda memiliki pertanyaan, saran, atau ingin berkontribusi dengan tulisan ilmiah Anda sendiri, jangan ragu
        untuk menghubungi kami melalui formulir kontak.
    </p>
    <p class="text-center font-bold md:text-[15px] text-gray-500 leading-relaxed">
        PUSTAKA oleh Bima Maarschal
    </p>
</div>
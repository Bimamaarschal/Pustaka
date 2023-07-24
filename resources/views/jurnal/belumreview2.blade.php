<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('jurnals.belumreview') }}" class="text-red-500">
                    {{ __('Review') }}
                </a> / {{ __('Review Dokumen Jurnal') }} / {{ $jurnal->judul }}
            </h2>

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
                        <iframe class="rounded-lg wow w-full h-50"
                            src="{{ asset('storage/pdfjurnal/' . $jurnal->pdf) }}" height="750"></iframe>
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

    <div class="max-w-7xl pb-20 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-ml sm:rounded-lg">

            <section class="p-10">
                <h2 class="font-semibold pb-10 text-xl text-gray-800 leading-tight">
                    {{ __('Form Hasil Review') }}
                </h2>
                <form action="{{ route('jurnals.storebelumreview2', ['id' => $jurnal->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-4">
                        <div class="mb-6">
                            <label class="text-gray-500 text-sm mb-5">
                                Nama Review
                            </label>
                            <input type="text" value="{{ Auth::user()->name }}" placeholder="Penulis" class="
                                w-full
                                pointer-events-none
                                                    rounded-md
                                                    border
                                                    border-[#E9EDF4]
                                                    py-3
                                                    px-5
                                                    bg-[#FCFDFE]
                                                    text-base text-gray-600
                                                    placeholder-[#ACB6BE]
                                                    outline-none
                                                    focus-visible:shadow-none
                                                    focus:border-red-500
                                                    focus:ring-red-500
                                                    transition
                " name="nama_review" />
                        </div>
                        <div>
                            <label class="text-gray-500 text-sm mb-5">
                                Tanggal Review Jurnal
                            </label>
                            <input type="text" placeholder="Tanggal"
                                value="{{ \Carbon\Carbon::now()->format('d - M - Y') }}" class="
                    pointer-events-none w-full rounded-md border border-[#E9EDF4] py-3 px-5 bg-[#FCFDFE] 
              text-base text-gray-600 placeholder-[#ACB6BE] outline-none focus-visible:shadow-none 
              focus:border-red-500 focus:ring-red-500 transition" name="tanggal_review" onfocus="(this.type='date')"
                                onblur="(this.type='text')" />
                        </div>

                    </div>
                    <div class="mb-6">
                        <label class="text-gray-500 text-sm "> Keterangan Hasil Review <br></label>
                        <textarea placeholder="Judul Jurnal" class="
                            w-full
                                                    rounded-md
                                                    border
                                                    border-[#E9EDF4]
                                                    py-3
                                                    px-5
                                                    bg-[#FCFDFE]
                                                    text-base text-gray-600
                                                    placeholder-[#ACB6BE]
                                                    outline-none
                                                    focus-visible:shadow-none
                                                    focus:border-red-500
                                                    focus:ring-red-500
                                                    transition
                                        " name="keterangan_review">{{ $jurnal->keterangan_review }}</textarea>
                        @error('keterangan_review')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label class="text-gray-500 text-sm "> Ketentuan Hasil Review <br></label>
                        <select name="statusreview" class="
                            w-full
                                                    rounded-md
                                                    border
                                                    border-[#E9EDF4]
                                                    py-3
                                                    px-5
                                                    bg-[#FCFDFE]
                                                    text-base text-gray-600
                                                    placeholder-[#ACB6BE]
                                                    outline-none
                                                    focus-visible:shadow-none
                                                    focus:border-red-500
                                                    focus:ring-red-500
                                                    transition
                                                ">
                            <option class="text-gray-500 text-sm " value="">Pilih Hasil
                            </option>
                            <option class="text-gray-500 text-sm " value="jurnal telah di review">Jurnal Sudah Benar dan
                                Baik</option>
                            <option class="text-gray-500 text-sm " value="jurnal terdapat kesalahan">Jurnal Terdapat
                                Kesalahan</option>
                            <option class="text-gray-500 text-sm " value="jurnal proses lebih lanjut">Jurnal Masih Perlu
                                Proses Review Lebih Lanjut</option>
                        </select>
                        @error('statusreview')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 3v17.25m0 0c-1.472 0-2.882.265-4.185.75M12 20.25c1.472 0 2.882.265 4.185.75M18.75 4.97A48.416 48.416 0 0012 4.5c-2.291 0-4.545.16-6.75.47m13.5 0c1.01.143 2.01.317 3 .52m-3-.52l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.988 5.988 0 01-2.031.352 5.988 5.988 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L18.75 4.971zm-16.5.52c.99-.203 1.99-.377 3-.52m0 0l2.62 10.726c.122.499-.106 1.028-.589 1.202a5.989 5.989 0 01-2.031.352 5.989 5.989 0 01-2.031-.352c-.483-.174-.711-.703-.59-1.202L5.25 4.971z" />
                        </svg>
                        <span>Hak Cipta dilindungi oleh PUSTAKA sebagai penyedia penyimpanan, kami tidak bertanggung
                            jawab atas isi jurnal yang disimpan.</span>
                    </p>
                    <p class="flex pb-3 items-center space-x-2 text-sm text-gray-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Kami sangat menghargai waktu dan upaya yang Anda berikan untuk membantu kami
                            menyempurnakan setiap aspek dari dokumen-dokumen ini. </span>
                    </p>

                    <button type="submit"
                        class="float-right inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Kirim Hasil
                    </button>
                </form>
            </section>
        </div>
    </div>






</x-app-layout>
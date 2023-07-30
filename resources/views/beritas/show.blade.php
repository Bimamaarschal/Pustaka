<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('tulisblogs.index') }}" class="text-white">
                    {{ __('Berita') }} / {{ __('Baca Berita') }} / {{ __($berita->judulberita) }}
                </a> 
            </h2>
            @if(auth()->check() && $berita->penulis == auth()->user()->name)
            <div class="flex">
                <form action="{{ route('beritas.destroy', $berita->id) }}" method="POST"
                    onsubmit="return confirm('Karena Anda pemilik tulisan Blog ini maka fitur hapus ini ditambahkan, apakah Anda yakin ingin menghapus data ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-white hover:bg-white-600 text-red-500 py-2 px-4 rounded">
                        Hapus
                    </button>
                </form>

                <a href="{{ route('beritas.edit', $berita->id) }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded ml-2">Edit</a>
            </div>
            @endif
        </div>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-ml sm:rounded-lg">

                <div class="flex items-center">
                    <img src="{{ asset('storage/beritas/' . $berita->image)}}" alt="image" class=" object-cover object-center mr-4"
                        style="width: 450px; height: 250px; " />

                    <div class=" ml-5  mr-5 ">
                        <div class="flex mb-5">
                            <span
                                class="bg-red-500 rounded inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-white mr-2">
                                {{ $berita->tanggal }}
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
                                {{ $berita->judul }}
                            </a>
                        </h3>
                        <p class="text-base text-body-color">
                            Penulis: {{ $berita->penulis }}
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="max-w-7xl pb-20 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-ml sm:rounded-lg">
            <section class="p-20 pb-5 lg:pt-[45px]">
                <div class="container">
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full ">
                            <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                <p class="text-base text-body-color">
                                    {!! $berita->konten !!}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>





</x-app-layout>
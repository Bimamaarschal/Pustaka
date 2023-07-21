<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('tulisblogs.index') }}" class="text-red-500">
                    {{ __('Blog') }}
                </a> / {{ __('Baca Blog') }} / {{ __($tulisblogs->judul) }}
            </h2>
            @if(auth()->check() && $tulisblogs->penulis == auth()->user()->name)
            <div class="flex">
                <form action="{{ route('tulisblogs.destroy', $tulisblogs->id) }}" method="POST"
                    onsubmit="return confirm('Karena Anda pemilik tulisan Blog ini maka fitur hapus ini ditambahkan, apakah Anda yakin ingin menghapus data ini?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded">
                        Hapus
                    </button>
                </form>

                <a href="{{ route('tulisblogs.edit', $tulisblogs->id) }}"
                    class="bg-gray-500 hover:bg-gray-600 text-white py-2 px-4 rounded ml-2">Edit</a>
            </div>
            @endif
        </div>

    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-ml sm:rounded-lg">

                <div class="flex items-center">
                    <img src="{{ asset($tulisblogs->image) }}" alt="image" class=" object-cover object-center mr-4"
                        style="width: 450px; height: 250px; " />

                    <div class=" ml-5  mr-5 ">
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
            mb-2
        ">
                            {{ $tulisblogs->tanggal }}
                        </span>
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
                                {{ $tulisblogs->judul }}
                            </a>
                        </h3>
                        <p class="text-base pb-2 text-body-color">
                            {{ $tulisblogs->konten1 }}
                        </p>
                        <p class="text-base text-body-color">
                            Penulis: {{ $tulisblogs->penulis }}
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
                                    {!! $tulisblogs->konten2 !!}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>





</x-app-layout>
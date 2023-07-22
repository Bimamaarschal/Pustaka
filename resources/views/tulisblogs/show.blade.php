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
                        <div class="flex mb-5">
                            
                            

                            @if (auth()->check())
                            @if ($tulisblogs->hasLiked(auth()->user()->id))
                            <form action="{{ route('blog.like', ['id' => $tulisblogs->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="bg-transparent rounded-xl inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-red-500"
                                    type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-6 h-6">
                                        <path
                                            d="M7.493 18.75c-.425 0-.82-.236-.975-.632A7.48 7.48 0 016 15.375c0-1.75.599-3.358 1.602-4.634.151-.192.373-.309.6-.397.473-.183.89-.514 1.212-.924a9.042 9.042 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75 2.25 2.25 0 012.25 2.25c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H14.23c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23h-.777zM2.331 10.977a11.969 11.969 0 00-.831 4.398 12 12 0 00.52 3.507c.26.85 1.084 1.368 1.973 1.368H4.9c.445 0 .72-.498.523-.898a8.963 8.963 0 01-.924-3.977c0-1.708.476-3.305 1.302-4.666.245-.403-.028-.959-.5-.959H4.25c-.832 0-1.612.453-1.918 1.227z" />
                                    </svg>
                                </button>
                            </form>
                            @else
                            <form action="{{ route('blog.like', ['id' => $tulisblogs->id]) }}" method="post">
                                @csrf
                                <button
                                    class="bg-transparent rounded-xl inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-red-500"
                                    type="submit">

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                                    </svg>

                                </button>
                            </form>
                            @endif
                            @endif

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
                                {{ $tulisblogs->judul }}
                            </a>
                        </h3>

                        <p class="text-base pb-2 text-body-color">
                            {{ $tulisblogs->konten1 }}
                        </p>
                        <p class="text-base mb-3 text-body-color">
                            Penulis: {{ $tulisblogs->penulis }}
                        </p>
                        <span
                                class="bg-red-500 mb-3 rounded inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-white mr-2">
                                {{ $tulisblogs->tanggal }}
                            </span>
                        <span
                                class="bg-red-500 mb-3 rounded inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-white">
                                Telah di baca : {{ $tulisblogs->view_count }} kali
                            </span>
                            <p
                                class="bg-red-500 mb-3 rounded inline-block text-center py-1 px-2 text-xs leading-loose font-semibold text-white ml-2 mr-2">
                                Jumlah Suka: {{ $tulisblogs->like_count }}</p>
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
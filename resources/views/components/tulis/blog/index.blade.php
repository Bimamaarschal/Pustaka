<section class="p-10 lg:pt-[40px]">
                    <div class="container">
                        <h1 class="mb-10 text-2xl font-medium text-dark-900">
                            Bacaan Populer
                        </h1>
                        <div class="flex flex-wrap -mx-4">        
                            @foreach ($tulisblogs as $tulisblog)
                            <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                                <div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">
                                    <div class="rounded overflow-hidden mb-8">
                                        <a href="blog-details.html" class="block">
                                        <img src="{{ asset($tulisblog->image ) }}"  alt="image">
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
                  {{ $tulisblog->tanggal }}       
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
                                                {{ $tulisblog->judul }}
                                            </a>
                                        </h3>
                                        <p class="text-base text-body-color">
                                            {{ $tulisblog->konten1 }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </section>
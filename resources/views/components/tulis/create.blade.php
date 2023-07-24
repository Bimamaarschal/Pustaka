<div class="p-6 pb-10 lg:p-8 bg-white border-b border-gray-200">

    <h1 class="pb-10 mt-8 text-2xl font-medium text-gray-900">
        Blog di mulai dari sini
        <h1>
            <form action="{{ route('tulisblogs.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-6">
                    <label class="text-gray-500 text-sm mb-5">
                                    Nama (tidak dapat di ubah)
                                </label>
                        <input type="text" placeholder="Penulis" value="{{ Auth::user()->name }}" class="
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
                    " name="penulis" />
                    </div>
                    <div class="mb-6">
                    <label class="text-gray-500 text-sm">
                                    Tanggal penulisan (tidak dapat di ubah) <br>
                                </label>
                        <input type="text" placeholder="Penulis"
                            value="{{ \Carbon\Carbon::now()->format('d - M - Y') }}" class="
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
                    " name="tanggal" />
                    </div>

                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-6">
                        <input type="text" placeholder="Judul" class="
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
                    " name="judul" />
                        @error('judul')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <div class="col-span-12 mb-2">
                            <span class="sr-only">Pilih gambar sampul anda</span>
                            <input type="file" name="image" placeholder="Pilih gambar sampul anda" class="block w-full text-sm text-slate-500
                file:mr-4 file:py-3.5 file:px-20
                file:rounded-md file:border-0
                file:text-sm file:font-semibold
                file:bg-red-500 file:text-white
                " />@error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <input name="konten1" placeholder="Kata pembuka" class="
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
                    " />
                    @error('konten1')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <textarea name="konten2" placeholder="BLOG TULIS" class="
                    ckeditor 
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
                    " rows="5"></textarea>
                </div>
                <button type="submit"
                    class="float-right inline-block rounded bg-red-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                    Kirim Tulisan
                </button>
            </form>
            <h1 class="pb-10 mt-8">
            </h1>
</div>
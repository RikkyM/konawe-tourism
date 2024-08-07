<div class="relative">
    <div
        class="absolute left-1/2 top-10 z-30 w-full -translate-x-1/2 px-5 sm:-top-7 sm:left-1/2 sm:max-w-[450px] sm:-translate-x-1/2 lg:max-w-[600px]">
        <div
            class="absolute left-1/2 z-10 flex w-[90%] -translate-x-1/2 justify-center gap-4 rounded-md border border-black/30 bg-white px-5 py-3 shadow-xl">
            <div class="flex flex-1 items-center gap-1">
                <label for="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="7" />
                            <path stroke-linecap="round" d="m20 20l-3-3" />
                        </g>
                    </svg>
                </label>
                <input name="search" id="search" type="text" placeholder="Cari Destinasi"
                    wire:model.live='search'
                    class="w-full px-1.5 py-2 text-xs placeholder:text-[#828282] focus:outline-none lg:text-sm"
                    autocomplete="off">
            </div>
            <div class="flex flex-1 items-center gap-1 sm:relative" x-data="{ open: false }"
                @keydown.escape.prevent.stop="open = false" @click.away="open = false">
                <label for="kategori">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 20 20">
                        <path fill="currentColor"
                            d="M16.219 1.943c.653.512 1.103 1.339 1.287 2.205a.474.474 0 0 1 .065.026l2.045.946a.659.659 0 0 1 .384.597v12.367a.665.665 0 0 1-.85.634l-5.669-1.6l-6.74 1.858a.674.674 0 0 1-.371-.004L.474 17.217a.66.66 0 0 1-.474-.63V3.998c0-.44.428-.756.855-.632l5.702 1.661l2.898-.887a.734.734 0 0 1 .122-.025c.112-.656.425-1.286.95-1.9c.623-.73 1.716-1.158 2.781-1.209c1.105-.053 1.949.183 2.91.936ZM1.333 4.881v11.215l4.87 1.449V6.298l-4.87-1.417Zm8.209.614l-2.006.613v11.279l5.065-1.394v-3.295c0-.364.299-.659.667-.659c.368 0 .666.295.666.66v3.177l4.733 1.335V6.136l-1.12-.52c-.019.11-.043.218-.073.323A6.134 6.134 0 0 1 16.4 8.05l-2.477 3.093a.67.67 0 0 1-1.073-.037l-2.315-3.353c-.382-.534-.65-1.01-.801-1.436a3.744 3.744 0 0 1-.192-.822Zm3.83-3.171c-.726.035-1.472.327-1.827.742c-.427.5-.637.968-.679 1.442c-.05.571-.016.974.126 1.373c.105.295.314.669.637 1.12l1.811 2.622l1.91-2.385a4.812 4.812 0 0 0 .841-1.657c.24-.84-.122-2.074-.8-2.604c-.695-.545-1.22-.692-2.018-.653Zm.138.697c1.104 0 2 .885 2 1.977a1.988 1.988 0 0 1-2 1.977c-1.104 0-2-.885-2-1.977s.896-1.977 2-1.977Zm0 1.318a.663.663 0 0 0-.667.659c0 .364.299.659.667.659a.663.663 0 0 0 .666-.66a.663.663 0 0 0-.666-.658Z" />
                    </svg>
                </label>
                <button id="kategori" @click="open = !open" type="button"
                    class="flex w-full justify-between bg-white px-1.5 px-2 py-2 text-xs text-[#828282] lg:text-sm">
                    <span>Kategori</span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 16 16">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>

                <div x-show="open" x-cloak
                    class="absolute left-1/2 top-[calc(100%_+_15px)] z-30 flex w-full max-w-[300px] -translate-x-1/2 flex-col space-y-4 rounded-md border border-black/30 bg-white p-3 shadow-[0_3px_5px_rgba(0,0,0,.5)] transition-all sm:left-0 sm:top-[calc(100%_+_25px)] sm:translate-x-0"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-out duration-300"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <button id="resetBtn" wire:click='resetFilter'
                        class="h-max w-max rounded bg-red-500 px-3 py-1.5 text-xs font-semibold text-white">Reset</button>
                    @if ($kategori->count() > 0)
                        @foreach ($kategori as $item)
                            <label class="flex w-max items-center gap-2 text-xs sm:text-sm" wire:poll.1s>
                                <input value="{{ $item->id }}" wire:model.live="selectKategori" type="checkbox"
                                    class="h-4 w-4 rounded p-2 text-blue-600">
                                <span>{{ $item->kategori }}</span>
                            </label>
                        @endforeach
                    @else
                        <div class="h-44 bg-red-500 w-full relative">
                            <span class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-max">Kategori Belum Ditambahkan</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="flex gap-1 p-2 text-xs sm:px-14 sm:pt-14 sm:text-sm lg:text-lg">
        <a href="{{ route('homepage') }}" class="text-[#17A2B8]">Home</a>/<span wire:ignore
            class="@if (request()->is('destinasi-wisata')) font-semibold @endif">Destinasi Wisata</span>
    </div>

    <div class="z-10 mt-20 grid w-full place-items-center gap-3 px-3 pb-10 pt-3 sm:mt-6">
        <div class="flex flex-col items-center">
            <h2 class="font-bold sm:text-xl md:text-lg lg:text-2xl">Surga
                Destinasi
                Konawe Selatan</h2>
            <p class="text-xs sm:text-sm">Ingin Menjelajah Ke Mana Hari Ini?
            </p>
        </div>
        <div class="grid w-full w-full max-w-max grid-cols-1 justify-center gap-7 p-5 md:grid-cols-2 lg:grid-cols-3">
            {{-- Filter & Search --}}
            @if ($results->count() > 0)
                @foreach ($results as $item)
                    <div data-aos="fade-up" data-aos-offset="230" data-aos-duration="500" wire:ignore.self wire:poll.1s
                        class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                        <div>
                            <div class="relative h-60 w-full overflow-hidden rounded-t-md">
                                <div class="group">
                                    <div class="image-container">
                                        <div class="h-60 w-full rounded-t-md bg-cover bg-center duration-500 group-hover:scale-110"
                                            style="background-image: url({{ route('img', $item->gambar) }})">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="absolute -bottom-11 left-0 w-56 w-full p-5 py-5 duration-500 group-hover:-translate-y-10">
                                <div
                                    class="absolute left-0 -z-10 h-28 w-64 border opacity-0 duration-500 group-hover:bg-white group-hover:opacity-100">
                                </div>
                                <span
                                    class="mt-3 inline-block text-lg font-bold text-black duration-500">{{ $item->nama_wisata }}</span>
                                <div class="mt-5 flex items-center justify-between">
                                    <a href="{{ route('detail', $item->id) }}"
                                        class="select-none before:size-0 hover:before:size-56 relative inline-block w-60 w-full w-full overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div
                    class="col-span-1 flex h-44 w-full items-center justify-center text-center font-semibold md:col-span-2 lg:col-span-3">
                    Wisata tidak ditemukan</div>
            @endif
            {{-- End Filter & Search --}}

        </div>
    </div>


</div>

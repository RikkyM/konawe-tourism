<div class="relative">
    <div
        class="absolute left-1/2 top-10 z-30 w-full -translate-x-1/2 px-5 sm:-top-7 sm:left-1/2 sm:max-w-[450px] sm:-translate-x-1/2 lg:max-w-[600px]">
        <div
            class="absolute left-1/2 z-10 flex w-[90%] -translate-x-1/2 justify-center gap-4 rounded-md border border-black/30 bg-white px-5 py-3 shadow-xl">
            <div class="flex items-center flex-1 gap-1">
                <label for="search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="7" />
                            <path stroke-linecap="round" d="m20 20l-3-3" />
                        </g>
                    </svg>
                </label>
                <input name="search" id="search" type="text" placeholder="Cari Destinasi"
                    class="w-full px-1.5 py-2 text-xs placeholder:text-[#828282] focus:outline-none lg:text-sm"
                    autocomplete="off">
            </div>
            <div class="flex items-center flex-1 gap-1 sm:relative" x-data="{ open: false }"
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

                <div x-show="open"
                    class="absolute left-1/2 top-20 z-30 flex w-full max-w-[300px] -translate-x-1/2 flex-col space-y-4 rounded-md border border-black/30 bg-white p-3 transition-all sm:left-0 sm:top-14 sm:translate-x-0"
                    x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 top-9"
                    x-transition:enter-end="opacity-100 top-20" x-transition:leave="transition ease-out duration-300"
                    x-transition:leave-start="opacity-100 top-16" x-transition:leave-end="opacity-0 top-9">
                    <label for="air" class="flex items-center gap-2">
                        <input type="checkbox" id="air" class="w-4 h-4 p-2 text-blue-600 rounded" value="">
                        <span>Air Terjun</span>
                    </label>
                    <label for="gunung" class="flex items-center gap-2">
                        <input type="checkbox" id="gunung" class="w-4 h-4 p-2 text-blue-600 rounded" value="">
                        <span>Gunung</span>
                    </label>
                    <label for="pantai" class="flex items-center gap-2">
                        <input type="checkbox" id="pantai" class="w-4 h-4 p-2 text-blue-600 rounded" value="">
                        <span>Pantai</span>
                    </label>
                </div>

            </div>
        </div>
    </div>

    <div class="flex gap-1 p-2 text-xs sm:px-14 sm:pt-14 sm:text-sm lg:text-lg">
        <a href="{{ route('homepage') }}" class="text-[#17A2B8]">Home</a>/<span
            class="@if (request()->is('destinasi-wisata')) font-semibold @endif">Destinasi Wisata</span>
    </div>

    <div class="z-10 grid w-full gap-3 px-3 pt-3 pb-10 mt-20 place-items-center sm:mt-6">
        <div class="flex flex-col items-center">
            <h2 class="font-bold sm:text-xl md:text-lg lg:text-2xl">Surga
                Destinasi
                Konawe Selatan</h2>
            <p class="text-xs sm:text-sm">Ingin Menjelajah Ke Mana Hari Ini?
            </p>
        </div>
        <div class="grid w-full w-full max-w-[1024px] grid-cols-1 justify-center gap-7 p-5 lg:grid-cols-3">
            <div data-aos-offset="230"
                class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                <div>
                    <div class="relative w-full overflow-hidden h-60 rounded-t-md">
                        <div class="group">
                            <div class="image-container">
                                <div class="w-full duration-500 bg-center bg-cover h-60 rounded-t-md group-hover:scale-110"
                                    style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-0 w-56 w-full p-5 py-5 duration-500 -bottom-11 group-hover:-translate-y-10">
                        <div
                            class="absolute left-0 w-64 duration-500 border opacity-0 -z-10 h-28 group-hover:bg-white group-hover:opacity-100">
                        </div>
                        <span class="inline-block mt-3 text-lg font-bold text-black duration-500">Puncak Ahuawali</span>
                        <div class="flex items-center justify-between mt-5">
                            <a href="#"
                                class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                Detail
                            </a>
                            <p class="text-black duration-500 opacity-0 group-hover:opacity-100">
                                Rp. 10.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos-offset="230"
                class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                <div>
                    <div class="relative w-full overflow-hidden h-60 rounded-t-md">
                        <div class="group">
                            <div class="image-container">
                                <div class="w-full duration-500 bg-center bg-cover h-60 rounded-t-md group-hover:scale-110"
                                    style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-0 w-56 w-full p-5 py-5 duration-500 -bottom-11 group-hover:-translate-y-10">
                        <div
                            class="absolute left-0 w-64 duration-500 border opacity-0 -z-10 h-28 group-hover:bg-white group-hover:opacity-100">
                        </div>
                        <span class="inline-block mt-3 text-lg font-bold text-black duration-500">Puncak
                            Ahuawali</span>
                        <div class="flex items-center justify-between mt-5">
                            <a href="#"
                                class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                Detail
                            </a>
                            <p class="duration-500 opacity-0 group-hover:text-black group-hover:opacity-100">
                                Rp. 10.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos-offset="230"
                class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                <div>
                    <div class="relative w-full overflow-hidden h-60 rounded-t-md">
                        <div class="group">
                            <div class="image-container">
                                <div class="w-full duration-500 bg-center bg-cover h-60 rounded-t-md group-hover:scale-110"
                                    style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-0 w-56 w-full p-5 py-5 duration-500 -bottom-11 group-hover:-translate-y-10">
                        <div
                            class="absolute left-0 w-64 duration-500 border opacity-0 -z-10 h-28 group-hover:bg-white group-hover:opacity-100">
                        </div>
                        <span class="inline-block mt-3 text-lg font-bold text-black duration-500">Puncak
                            Ahuawali</span>
                        <div class="flex items-center justify-between mt-5">
                            <a href="#"
                                class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                Detail
                            </a>
                            <p class="duration-500 opacity-0 group-hover:text-black group-hover:opacity-100">
                                Rp. 10.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos-offset="230"
                class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                <div>
                    <div class="relative w-full overflow-hidden h-60 rounded-t-md">
                        <div class="group">
                            <div class="image-container">
                                <div class="w-full duration-500 bg-center bg-cover h-60 rounded-t-md group-hover:scale-110"
                                    style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-0 w-56 w-full p-5 py-5 duration-500 -bottom-11 group-hover:-translate-y-10">
                        <div
                            class="absolute left-0 w-64 duration-500 border opacity-0 -z-10 h-28 group-hover:bg-white group-hover:opacity-100">
                        </div>
                        <span class="inline-block mt-3 text-lg font-bold text-black duration-500">Puncak
                            Ahuawali</span>
                        <div class="flex items-center justify-between mt-5">
                            <a href="#"
                                class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                Detail
                            </a>
                            <p class="duration-500 opacity-0 group-hover:text-black group-hover:opacity-100">
                                Rp. 10.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos-offset="230"
                class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                <div>
                    <div class="relative w-full overflow-hidden h-60 rounded-t-md">
                        <div class="group">
                            <div class="image-container">
                                <div class="w-full duration-500 bg-center bg-cover h-60 rounded-t-md group-hover:scale-110"
                                    style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-0 w-56 w-full p-5 py-5 duration-500 -bottom-11 group-hover:-translate-y-10">
                        <div
                            class="absolute left-0 w-64 duration-500 border opacity-0 -z-10 h-28 group-hover:bg-white group-hover:opacity-100">
                        </div>
                        <span class="inline-block mt-3 text-lg font-bold text-black duration-500">Puncak
                            Ahuawali</span>
                        <div class="flex items-center justify-between mt-5">
                            <a href="#"
                                class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                Detail
                            </a>
                            <p class="duration-500 opacity-0 group-hover:text-black group-hover:opacity-100">
                                Rp. 10.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos-offset="230"
                class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                <div>
                    <div class="relative w-full overflow-hidden h-60 rounded-t-md">
                        <div class="group">
                            <div class="image-container">
                                <div class="w-full duration-500 bg-center bg-cover h-60 rounded-t-md group-hover:scale-110"
                                    style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-0 w-56 w-full p-5 py-5 duration-500 -bottom-11 group-hover:-translate-y-10">
                        <div
                            class="absolute left-0 w-64 duration-500 border opacity-0 -z-10 h-28 group-hover:bg-white group-hover:opacity-100">
                        </div>
                        <span class="inline-block mt-3 text-lg font-bold text-black duration-500">Puncak
                            Ahuawali</span>
                        <div class="flex items-center justify-between mt-5">
                            <a href="#"
                                class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                Detail
                            </a>
                            <p class="duration-500 opacity-0 group-hover:text-black group-hover:opacity-100">
                                Rp. 10.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos-offset="230"
                class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                <div>
                    <div class="relative w-full overflow-hidden h-60 rounded-t-md">
                        <div class="group">
                            <div class="image-container">
                                <div class="w-full duration-500 bg-center bg-cover h-60 rounded-t-md group-hover:scale-110"
                                    style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-0 w-56 w-full p-5 py-5 duration-500 -bottom-11 group-hover:-translate-y-10">
                        <div
                            class="absolute left-0 w-64 duration-500 border opacity-0 -z-10 h-28 group-hover:bg-white group-hover:opacity-100">
                        </div>
                        <span class="inline-block mt-3 text-lg font-bold text-black duration-500">Puncak
                            Ahuawali</span>
                        <div class="flex items-center justify-between mt-5">
                            <a href="#"
                                class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                Detail
                            </a>
                            <p class="duration-500 opacity-0 group-hover:text-black group-hover:opacity-100">
                                Rp. 10.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos-offset="230"
                class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                <div>
                    <div class="relative w-full overflow-hidden h-60 rounded-t-md">
                        <div class="group">
                            <div class="image-container">
                                <div class="w-full duration-500 bg-center bg-cover h-60 rounded-t-md group-hover:scale-110"
                                    style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-0 w-56 w-full p-5 py-5 duration-500 -bottom-11 group-hover:-translate-y-10">
                        <div
                            class="absolute left-0 w-64 duration-500 border opacity-0 -z-10 h-28 group-hover:bg-white group-hover:opacity-100">
                        </div>
                        <span class="inline-block mt-3 text-lg font-bold text-black duration-500">Puncak
                            Ahuawali</span>
                        <div class="flex items-center justify-between mt-5">
                            <a href="#"
                                class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                Detail
                            </a>
                            <p class="duration-500 opacity-0 group-hover:text-black group-hover:opacity-100">
                                Rp. 10.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos-offset="230"
                class="group relative h-80 w-64 justify-self-center overflow-hidden rounded-md bg-white text-gray-50 shadow-[0_0_5px_rgba(0,0,0,.5)] duration-500">
                <div>
                    <div class="relative w-full overflow-hidden h-60 rounded-t-md">
                        <div class="group">
                            <div class="image-container">
                                <div class="w-full duration-500 bg-center bg-cover h-60 rounded-t-md group-hover:scale-110"
                                    style="background-image: url({{ asset('assets/img/Puncak_Ahuawali/1.jpeg') }})">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute left-0 w-56 w-full p-5 py-5 duration-500 -bottom-11 group-hover:-translate-y-10">
                        <div
                            class="absolute left-0 w-64 duration-500 border opacity-0 -z-10 h-28 group-hover:bg-white group-hover:opacity-100">
                        </div>
                        <span class="inline-block mt-3 text-lg font-bold text-black duration-500">Puncak
                            Ahuawali</span>
                        <div class="flex items-center justify-between mt-5">
                            <a href="#"
                                class="before:size-0 hover:before:size-20 relative inline-block w-56 w-max overflow-hidden rounded-sm border border-black bg-transparent px-2 py-1 opacity-0 duration-500 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:rounded-full before:bg-black before:transition-all before:duration-[1s] before:content-[''] after:absolute after:left-1/2 after:top-1/2 after:-translate-x-1/2 after:-translate-y-1/2 after:text-black after:transition-all after:duration-[1s] after:content-['Detail'] hover:after:text-white group-hover:opacity-100">
                                Detail
                            </a>
                            <p class="duration-500 opacity-0 group-hover:text-black group-hover:opacity-100">
                                Rp. 10.000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

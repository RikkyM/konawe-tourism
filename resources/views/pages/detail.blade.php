@extends('app')
@section('title')
    Detail
@endsection
@section('pages')
    @include('includes.navbar')
    <main>
        <div class="mt-20 flex gap-1 p-2 text-xs sm:px-14 sm:pt-14 sm:text-sm lg:text-lg">
            <a href="{{ route('homepage') }}" class="text-[#17A2B8]">Home</a>/<span
                class="@if (request()->routeIs('detail')) font-semibold @endif">{{ $detail->nama_wisata }}</span>
        </div>
        <div class="mt-2 grid w-full place-items-center gap-3 p-3">
            <figure
                class="flex w-[90%] flex-col p-3 md:max-w-3xl md:flex-row-reverse md:items-center md:justify-between md:gap-5 lg:mt-5 lg:w-full lg:max-w-5xl">
                <img src="{{ route('img', $detail->gambar) }}" alt="gambar-1" id="imageHero"
                    class="max-w-72 mx-auto w-full cursor-pointer rounded-br-[35px] rounded-tl-[35px] md:mx-0 lg:max-w-[450px]">
                <figcaption class="mt-4 flex flex-col gap-4 md:h-full md:gap-5">
                    <h2 class="mx-auto font-semibold md:mx-0 md:text-lg lg:text-2xl">{{ $detail->nama_wisata }}</h2>
                    <p class="w-full text-justify text-sm md:max-w-[340px] md:text-sm lg:max-w-[450px] lg:text-lg">
                        {{ $detail->deskripsi }}</p>
                </figcaption>
            </figure>
        </div>
        <div class="mx-auto w-[90%] flex-col p-3 md:max-w-3xl md:flex-row-reverse md:items-center md:justify-between md:gap-5 lg:mt-5 lg:w-full lg:max-w-5xl">
            <h2 class="text-xl font-bold">Sarana Pariwisata</h2>
            <ul class="list-disc">
                @if ($detail->sarana->count() > 0)
                    @foreach ($detail->sarana as $item)
                        <li class="text-lg">{{ $item->sarana }}</li>
                    @endforeach
                @else
                    <li class="text-lg">-</li>
                @endif
            </ul>
        </div>



        <!-- Lightbox Modal -->
        <div id="lightBox"
            class="pointer-events-none fixed left-0 top-0 z-50 flex h-full w-full items-center justify-center">
            <div id="backLight"
                class="pointer-events-none absolute left-0 top-0 z-10 h-full w-full bg-black bg-black/30 opacity-0 backdrop-blur-md transition-all duration-[.5s]">
            </div>
            <button id="imgLight"
                class="z-20 w-40 scale-0 cursor-default select-none transition-all duration-[.5s] md:w-80"><img
                    src="" alt="lightBoxImg"></button>
        </div>

        {{-- Gallery --}}
        <div class="my-14 h-max w-full">
            <h2 class="mb-5 text-center font-bold lg:text-4xl">Gallery</h2>
            <div class="mx-auto h-max w-[90%] columns-2 gap-5 space-y-5 sm:w-[70%] md:columns-3">
                @foreach ($detail->gallery as $item)
                    <img id="gallery" src="{{ route('gallery', $item->gambar) }}" alt="gambar"
                        class="cursor-pointer bg-cover bg-center bg-no-repeat transition-all duration-[.5s]">
                @endforeach
            </div>
        </div>

        <div class="z-10 my-10 grid w-full gap-3">
            <h2 class="text-center text-lg font-bold lg:text-3xl">Location Maps</h2>
            <div class="flex h-[300px] w-full justify-center p-7 md:h-[500px]">
                <div id="map"
                    class="z-10 h-full w-full max-w-[1028px] overflow-hidden rounded-lg border border-black shadow-md">
                </div>
            </div>
        </div>
    </main>

    @include('includes.footer')

    <script>
        let map = L.map('map', {
            attributionControl: false,
            center: [{{ $detail->latitude }}, {{ $detail->longitude }}],
            zoom: 12
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        let marker = L.marker([{{ $detail->latitude }}, {{ $detail->longitude }}]).addTo(map);

        const imageHero = document.querySelector('#imageHero')
        const lightBox = document.querySelector('#lightBox');
        const backLight = document.querySelector('#backLight')
        const imgLight = document.querySelector('#imgLight');
        const imgL = document.querySelector('#imgLight img');
        const gallery = document.querySelectorAll('#gallery');

        gallery.forEach(images => {
            images.addEventListener('mouseenter', () => {
                gallery.forEach(image => {
                    if (image !== images) {
                        image.classList.add('grayscale');
                    }
                })
            });

            images.addEventListener('mouseleave', () => {
                gallery.forEach(image => {
                    image.classList.remove('grayscale');
                })
            })

            openImg(images);
        })

        function openImg(event) {
            event.addEventListener('click', () => {
                lightBox.classList.toggle('pointer-events-none')
                lightBox.classList.toggle('pointer-events-auto')
                backLight.classList.toggle('opacity-0')
                backLight.classList.toggle('pointer-events-none')
                backLight.classList.toggle('pointer-events-auto')
                imgLight.classList.add('scale-125')
                imgLight.classList.remove('scale-0')
                imgL.src = event.src;
            })
        }

        openImg(imageHero);

        backLight.addEventListener('click', e => {
            if (e.target === backLight) {
                lightBox.classList.toggle('pointer-events-none')
                lightBox.classList.toggle('pointer-events-auto')
                backLight.classList.toggle('opacity-0')
                backLight.classList.toggle('pointer-events-none')
                backLight.classList.toggle('pointer-events-auto')
                imgLight.classList.add('scale-0')
                imgLight.classList.remove('scale-125')
            }
        })
    </script>
@endsection

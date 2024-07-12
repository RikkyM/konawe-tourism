@extends('app')
@section('title')
    Detail
@endsection
@section('pages')
    @include('includes.navbar')
    <main>
        <div class="mt-20 flex gap-1 p-2 text-xs sm:px-14 sm:pt-14 sm:text-sm lg:text-lg">
            <a href="{{ route('homepage') }}" class="text-[#17A2B8]">Home</a>/<span
                class="@if (request()->is('destinasi-wisata')) font-semibold @endif">{{ $detail->nama_wisata }}</span>
        </div>
        <div class="mt-2 grid w-full place-items-center gap-3 p-3">
            <figure
                class="flex w-[90%] flex-col p-3 md:max-w-3xl md:flex-row-reverse md:items-center md:justify-between md:gap-5 lg:mt-5 lg:w-full lg:max-w-5xl">
                <img src="{{ asset('assets/img/gambar-1.png') }}" alt="gambar-1"
                    class="max-w-72 mx-auto w-full rounded-br-[35px] rounded-tl-[35px] md:mx-0 lg:max-w-[450px]">
                <figcaption class="mt-4 flex flex-col gap-4 md:h-full md:gap-5">
                    <h2 class="mx-auto font-semibold md:mx-0 md:text-lg lg:text-2xl">{{ $detail->nama_wisata }}</h2>
                    <p class="w-full text-sm md:max-w-[340px] md:text-sm lg:max-w-[450px] lg:text-lg">
                        {{ $detail->deskripsi }}</p>
                    <div class="flex flex-col gap-2">
                        <p class="text-lg font-bold md:text-xl">Tiket: {{ $detail->harga ? currency_IDR($detail->harga) : 'Gratis' }}</p>
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=62{{ $detail->whatsapp }}" class="px-12 rounded font-bold text-white py-2 bg-[#17A2B8] w-max">Beli Tiket</a>
                    </div>
                </figcaption>
            </figure>
        </div>


        <div class="my-10 grid w-full gap-3">
            <h2 class="text-center text-lg lg:text-3xl font-bold">Location Maps</h2>
            <div class="h-[300px] md:h-[500px] w-full p-7 flex justify-center">
                <div id="map" class="h-full w-full max-w-[1028px] rounded-lg overflow-hidden border border-black shadow-md"></div>
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

        let marker = L.marker([{{ $detail->latitude }}, {{ $detail->longitude }}]).addTo(map); // Add marker here
    </script>
@endsection

@extends('app')
@section('title')
    Dashboard
@endsection
@section('pages')
    <main class="h-full w-full bg-gray-300 p-3">
        @include('pages.admin.includes.navbar')
        <div class="h-[calc(100%_-_92px)] flex">
            @include('pages.admin.includes.sidebar')
            <section class="my-3 ml-3 bg-white p-2 rounded-md overflow-auto h-full w-full gap-3 flex flex-col">
                <div class="bg-blue-500/50 h-20 rounded-md flex items-center px-7">
                    <span class="font-bold text-xl">Welcome Back, {{ Auth::user()->name }} 👋</span>
                </div>
                <div class="flex gap-5">
                    <div class="w-full h-36 bg-[#0C1844] flex items-center px-5 text-2xl rounded-md font-semibold justify-between">
                        <span class="text-white">Wisata</span>
                        <span class="bg-white rounded-md size-10 inline-block flex items-center justify-center">{{ $wisata }}</span>
                    </div>
                    <div class="w-full h-36 bg-[#252A36] flex items-center px-5 text-2xl rounded-md font-semibold justify-between">
                        <span class="text-white">Kategori</span>
                        <span class="bg-white rounded-md size-10 inline-block flex items-center justify-center">{{ $kategori }}</span>
                    </div>
                    <div class="w-full h-36 bg-[#FB8136] flex items-center px-5 text-2xl rounded-md font-semibold justify-between">
                        <span class="text-white">Kategori</span>
                        <span class="bg-white rounded-md size-10 inline-block flex items-center justify-center">{{ $kategori }}</span>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection

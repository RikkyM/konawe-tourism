@extends('app')
@section('title')
    Dashboard
@endsection
@section('pages')
    <main class="h-full w-full bg-gray-300 p-3">
        @include('pages.admin.includes.navbar')
        <div class="h-[calc(100%_-_92px)] flex">
            @include('pages.admin.includes.sidebar')
            <section class="my-3 ml-3 bg-red-500 rounded-md overflow-auto h-full w-full">
                asdasd
            </section>
        </div>
    </main>
@endsection

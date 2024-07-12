@extends('app')
@section('title')
    Komentar
@endsection
@section('pages')
    <main class="h-full w-full bg-gray-300 p-3">
        @include('pages.admin.includes.navbar')
        <div class="flex h-[calc(100%_-_92px)]">
            @include('pages.admin.includes.sidebar')
            <section class="my-3 ml-3 h-full w-full overflow-auto rounded-md">
                @livewire('admin.komentar')
            </section>
        </div>
    </main>
@endsection

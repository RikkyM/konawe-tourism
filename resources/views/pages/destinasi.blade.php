@extends('app')
@section('title')
    Destinasi Wisata
@endsection
@section('pages')
    @include('includes.navbar')
    <main>
        @include('includes.hero')
        @livewire('destinasi-wisata')
    </main>
    @include('includes.footer')
@endsection

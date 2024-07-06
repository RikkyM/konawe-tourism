@extends('app')
@section('title')
    Login
@endsection
@section('pages')
    <main class="h-screen w-screen bg-cover bg-center" style="background-image: url({{ asset('assets/img/gambar-1.png') }})">
        <div class="flex h-full w-full items-center justify-center backdrop-blur-sm">
            <form action="#" method="POST"
                class="ites-center flex w-[90%] max-w-[400px] flex-col gap-6 rounded-md bg-white p-10 backdrop-blur-sm">
                @csrf
                <img src="{{ asset('assets/logo/logo_footer.png') }}" alt="logo"
                    class="max-w-28 sm:max-w-32 mx-auto mb-4 w-full">
                <label for="email" class="flex flex-col gap-1">
                    <span class="@error('email') text-red-500 @enderror text-sm text-gray-400">E-Mail</span>
                    <input type="email" id="email" name="email" required
                        class="@error('email') border-red-500 focus:outline-red-500 text-red-500 @enderror rounded border border-gray-500/50 px-1.5 py-2 text-sm"
                        autocomplete="off">
                    @error('email')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </label>
                <label for="password" class="flex flex-col gap-1">
                    <span class="text-sm text-gray-400 @error('password') text-red-500 @enderror">Password</span>
                    <input type="password" id="password" name="password" required
                        class="@error('password') border-red-500 focus:outline-red-500 text-red-500 @enderror rounded border border-gray-500/50 px-1.5 py-2 text-sm"
                        autocomplete="off">
                    @error('password')
                        <p class="text-xs text-red-500">{{ $message }}</p>
                    @enderror
                </label>
                <div class="flex w-full select-none justify-center">
                    <button type="submit" class="rounded bg-[#4D869C] px-8 py-2 text-white">Login</button>
                </div>
            </form>
        </div>
    </main>
@endsection

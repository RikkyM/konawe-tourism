@extends('app')
@section('title')
    Login
@endsection
@section('pages')
    <main class="h-screen w-screen px-5 pb-3 pt-5 lg:p-5 select-none">
        <div class="mx-auto flex h-full w-full flex-col items-center md:justify-center">
            <div
                class="flex h-max w-full max-w-[400px] flex-col gap-6 md:justify-center lg:h-full lg:max-w-full lg:flex-row">
                <form action="{{ route('login') }}" method="POST"
                    class="relative order-2 flex flex-col lg:order-1 lg:h-full lg:flex-1 lg:justify-center">
                    @csrf
                    <div class="mx-auto w-full max-w-[400px]">
                        <h2
                            class="relative mb-8 text-2xl font-bold before:absolute before:-bottom-1 before:h-1 before:w-24 before:rounded-full before:bg-black before:content-['']">
                            Sign In</h2>
                        <div class="flex flex-col gap-3">
                            <label for="email" class="flex flex-col gap-0.5 text-sm">
                                <span class="@error('email') text-red-500 @enderror font-semibold">Email</span>
                                <input type="email" id="email" name="email" autocomplete="off"
                                    class="@error('email') border-red-500 text-red-500 placeholder:text-red-500 focus:outline-red-500 @enderror rounded border border-gray-500/50 p-2 focus:outline-1 overflow-hidden focus:outline-gray-500"
                                    value="{{ old('email') }}" placeholder="jhon.doe@email.com">
                                @error('email')
                                    <p class="text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </label>
                            <label for="password" class="flex flex-col gap-0.5 text-sm">
                                <span class="@error('password') text-red-500 @enderror font-semibold">Password</span>
                                <div
                                    class="@error('password') border-red-500 text-red-500 focus-within:ring-red-500 @enderror flex w-full items-center gap-2 rounded border border-gray-500/50 bg-transparent pr-2 focus-within:ring-1 overflow-hidden focus-within:ring-gray-600">
                                    <input type="password" id="password" name="password" class="w-full p-2 focus:outline-0 @error('password') placeholder:text-red-500 @enderror"
                                        autocomplete="off" placeholder="At least 6 characters">
                                    <svg id="show" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 16 16" class="fill-current text-gray-500 cursor-pointer @error('password') text-red-500 @enderror">
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M1.87 8.515L1.641 8l.229-.515a6.708 6.708 0 0 1 12.26 0l.228.515l-.229.515a6.708 6.708 0 0 1-12.259 0M.5 6.876l-.26.585a1.328 1.328 0 0 0 0 1.079l.26.584a8.208 8.208 0 0 0 15 0l.26-.584a1.328 1.328 0 0 0 0-1.08l-.26-.584a8.208 8.208 0 0 0-15 0M9.5 8a1.5 1.5 0 1 1-3 0a1.5 1.5 0 0 1 3 0M11 8a3 3 0 1 1-6 0a3 3 0 0 1 6 0"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <svg id="hide" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 16 16" class="hidden fill-current text-gray-500 cursor-pointer @error('password') text-red-500 @enderror">
                                        <path fill="currentColor"
                                            d="M8 11c-1.65 0-3-1.35-3-3s1.35-3 3-3s3 1.35 3 3s-1.35 3-3 3Zm0-5c-1.1 0-2 .9-2 2s.9 2 2 2s2-.9 2-2s-.9-2-2-2Z" />
                                        <path fill="currentColor"
                                            d="M8 13c-3.19 0-5.99-1.94-6.97-4.84a.442.442 0 0 1 0-.32C2.01 4.95 4.82 3 8 3s5.99 1.94 6.97 4.84c.04.1.04.22 0 .32C13.99 11.05 11.18 13 8 13ZM2.03 8c.89 2.4 3.27 4 5.97 4s5.07-1.6 5.97-4C13.08 5.6 10.7 4 8 4S2.93 5.6 2.03 8Z" />
                                        <path fill="currentColor"
                                            d="M14 14.5a.47.47 0 0 1-.35-.15l-12-12c-.2-.2-.2-.51 0-.71c.2-.2.51-.2.71 0l11.99 12.01c.2.2.2.51 0 .71c-.1.1-.23.15-.35.15Z" />
                                    </svg>
                                </div>
                                @error('password')
                                    <p class="text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </label>
                        </div>
                        <button type="submit"
                            class="mt-7 w-full rounded-xl bg-[#162D3A] py-2.5 font-semibold text-white">Sign
                            In</button>
                    </div>
                    {{-- <footer class="absolute bottom-0 left-1/2 -translate-x-1/2">
                        <p class="whitespace-nowrap text-xs text-gray-500">© Copyright 2024. Made by Tim BDT24-FS043</p>
                    </footer> --}}
                </form>
                <div class="order-1 h-52 w-full rounded-2xl bg-cover lg:order-2 lg:h-full lg:flex-1">
                    <div style="background-image: url({{ asset('assets/img/gambar-1.png') }})"
                        class="h-full rounded-2xl bg-cover bg-center bg-no-repeat">
                    </div>
                </div>
            </div>
        </div>
    </main>

    @push('script')
        <script>
            const password = document.querySelector('#password');
            const show = document.querySelector("#show");
            const hide = document.querySelector('#hide');

            function toggleVisibility(isShow) {
                password.setAttribute('type', isShow ? 'text' : 'password');
                show.classList.toggle('hidden', isShow);
                hide.classList.toggle('hidden', !isShow);
            }

            show.addEventListener('click', () => toggleVisibility(true));
            hide.addEventListener('click', () => toggleVisibility(false));
        </script>
    @endpush
@endsection

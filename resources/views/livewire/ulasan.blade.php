<div>
    <div class="fixed right-5 top-24 flex flex-col gap-3" wire:ignore.self>
        <div id="alertNotif" wire:ignore.self
            class="pointer-events-none translate-x-5 rounded-md bg-green-500 p-3 font-semibold text-white opacity-0 transition-all duration-300">
            @if (Session::has('message'))
                {{ session('message') }}
            @endif
        </div>
    </div>
    <div class="my-14 grid w-full place-items-center gap-3 p-3">
        <form wire:submit.prevent='tambahKomentar' data-aos="fade-up" data-aos-duration="500" data-aos-offset="230"
            wire:ignore.self
            class="flex w-full max-w-[500px] flex-col rounded-md bg-white p-3 shadow-[0_0_15px_rgba(0,0,0,.1)]">
            @csrf
            <h2>Leave a Comment</h2>
            <p class="text-xs">Bantu kami untuk meningkatkan layanan kami.</p>

            <div class="mt-5 flex w-full flex-col gap-5">
                <label for="nama" class="relative left-0 flex h-max w-full flex-col">
                    <input type="text" id="nama" wire:model='nama' placeholder="" autocomplete="off"
                        class="peer w-full rounded-md border border-black/30 p-2">
                    <span
                        class="absolute -top-2 left-2 h-max w-max bg-white px-0.5 text-xs transition-[font,inset] peer-placeholder-shown:inset-y-2 peer-placeholder-shown:text-base peer-focus:-top-2 peer-focus:text-xs">Nama</span>
                    @error('nama')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </label>
                <label for="komentar" class="relative left-0 flex h-max w-full flex-col">
                    <textarea wire:model='komentar' id="komentar" rows="5" placeholder=""
                        class="peer w-full min-h-20 max-h-32 rounded-md border border-black/30 p-2"></textarea>
                    <span
                        class="absolute -top-2 left-2 h-max w-max bg-white px-0.5 text-xs transition-[font,inset] peer-placeholder-shown:inset-y-2 peer-placeholder-shown:text-base peer-focus:-top-2 peer-focus:text-xs">Komentar</span>
                    @error('komentar')
                        <p class="text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </label>
                <button type="button" wire:click='tambahKomentar'
                    class="w-full rounded-md bg-black py-3 text-xs font-semibold text-white">Kirim
                    Komentar</button>
            </div>
        </form>
    </div>
</div>

@script
    <script>
        const alertNotif = document.querySelector('#alertNotif');

        Livewire.on('notifUlasan', () => {
            alertNotif.classList.remove('opacity-0');
            alertNotif.classList.remove('translate-x-5');
            setTimeout(() => {
                alertNotif.classList.add('opacity-0');
                alertNotif.classList.add('translate-x-5');
            }, 3000);
        });
    </script>
@endscript

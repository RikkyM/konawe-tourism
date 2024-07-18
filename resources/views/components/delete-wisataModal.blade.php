<div id="deleteModal" wire:ignore.self
    class="pointer-events-none absolute left-0 top-0 z-50 flex h-full w-full items-center justify-center overflow-auto bg-black/30 py-10 opacity-0 backdrop-blur-sm transition-all">
    <div wire:ignore.self
        class="absolute grid w-full max-w-[500px] grid-cols-1 gap-3 rounded bg-white p-7 opacity-0 transition-all ease-linear"
        id="delete">
        <div class="flex flex-col gap-6">
            <div class="py-5 font-semibold">Apakah anda yakin ingin menghapus wisata tersebut ?</div>
            <div class="flex justify-end gap-5">
                <button type="button" wire:click='delWisata()'
                    class="rounded bg-red-500 px-3 py-1.5 font-semibold text-white">Hapus</button>
                <button type="button" id="cancelDelete"
                    class="rounded border border-black bg-white px-3 py-1.5 font-semibold">Batal</button>
            </div>
        </div>
    </div>
</div>

<div wire:ignore.self
    class="absolute pointer-events-none left-1/2 -translate-x-1/2 shadow-md border border-gray-500/50 opacity-0 top-5 -translate-y-5 grid w-full z-[999] max-w-[500px] grid-cols-1 gap-3 rounded bg-white p-7 transition-all ease-linear"
    id="deleteGallery">
    <div class="flex flex-col gap-6">
        <div class="py-5 font-semibold">Apakah anda yakin ingin menghapus wisata tersebut ?</div>
        <div class="flex justify-end gap-5">
            <button type="button" wire:click='deleteGallery()'
                class="rounded bg-red-500 px-3 py-1.5 font-semibold text-white">Hapus</button>
            <button type="button" id="cancelDelGallery"
                class="rounded border border-black bg-white px-3 py-1.5 font-semibold">Batal</button>
        </div>
    </div>
</div>

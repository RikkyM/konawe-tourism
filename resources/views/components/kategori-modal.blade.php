<div id="addKategoriModal" wire:ignore.self
    class="pointer-events-none absolute left-0 top-0 z-50 flex h-full w-full items-center justify-center overflow-auto bg-black/30 py-10 opacity-0 backdrop-blur-sm transition-all">
    <form wire:ignore.self wire:submit='tambahKategoriWisata'
        class="absolute grid w-full max-w-[500px] grid-cols-1 gap-3 rounded bg-white p-5 opacity-0 transition-all ease-linear"
        id="addKategoriForm">
        @csrf
        <h2 class="col-span-4 text-center text-xl font-semibold">Tambah Kategori</h2>
        <label for="kategori_wisata" class="col-span-2 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Nama Kategori</span>
            <input autocomplete="off" type="text" wire:model='kategori_wisata' id="kategori_wisata"
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500"
                placeholder="Masukkan kategori wisata">
        </label>

        <div class="col-span-4 flex justify-center gap-3">
            <button type="button" wire:click='tambahKategoriWisata'
                class="rounded bg-green-500 px-5 py-2 font-semibold text-white">Tambah</button>
            <button id="cancelModalKategori" type="button"
                class="rounded bg-red-500 px-5 py-2 font-semibold text-white">Batal</button>
        </div>
    </form>
</div>

<div id="editKategoriModal" wire:ignore.self
    class="pointer-events-none absolute left-0 top-0 z-50 flex h-full w-full items-center justify-center overflow-auto bg-black/30 py-10 opacity-0 backdrop-blur-sm transition-all">
    <form wire:ignore.self wire:submit='ubahCategory'
        class="absolute grid w-full max-w-[500px] grid-cols-1 gap-3 rounded bg-white p-5 opacity-0 transition-all ease-linear"
        id="editKategoriForm">
        @csrf
        <h2 class="col-span-4 text-center text-xl font-semibold">Edit Kategori</h2>
        <label for="kategori_wisata" class="col-span-2 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Nama Kategori</span>
            <input type="text" wire:model='kategori_wisata' id="kategori_wisata" required
                class="rounded-md border border-gray-500/50 p-2 text-sm focus:outline-gray-500"
                placeholder="Masukkan kategori wisata">
        </label>

        <div class="col-span-4 flex justify-center gap-3">
            <button type="button" wire:click='ubahCategory'
                class="rounded bg-blue-500 px-5 py-2 font-semibold text-white">Ubah</button>
            <button id="cancelModalKategoriEdit" type="button"
                class="rounded bg-red-500 px-5 py-2 font-semibold text-white">Batal</button>
        </div>
    </form>
</div>

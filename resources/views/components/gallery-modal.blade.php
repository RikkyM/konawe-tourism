<div id="informasiTambahanBg" wire:ignore.self wire:submit='galleryAdd'
    class="pointer-events-none absolute left-0 top-0 z-50 flex h-full w-full items-center justify-center overflow-auto bg-black/30 py-10 opacity-0 backdrop-blur-sm transition-all">
    <form id="informasiTambahanModal" wire:ignore.self
        class="absolute grid w-full max-w-[500px] grid-cols-2 gap-3 rounded bg-white p-5 opacity-0 transition-all ease-linear">
        @csrf
        <label for="galleryInput" class="col-span-2 flex flex-col gap-0.5">
            <span class="text-sm font-semibold text-gray-600">Gallery</span>
            <input wire:model='gallery' type="file" multiple id="galleryInput" accept=".jpg,.jpeg,.png"
                class="my-1 w-full rounded-md text-sm file:mr-3 file:rounded file:border-none file:bg-blue-500 file:px-4 file:py-2 file:text-white focus:outline-gray-500"
                placeholder="Masukkan nama wisata">
            <div wire:loading wire:target='gallery'>
                uploading...
            </div>
            @error('gallery')
                <p class="text-sm text-red-500">{{ $message }}</p>
            @enderror
        </label>
        <div class="col-span-2 h-72 max-h-72 w-full overflow-auto">
            @if ($imageGallery)
                <button type="button" wire:click="deleteGalleryConfirmation('')"
                    class="sticky top-0 z-50 mb-2 rounded-sm bg-red-500 px-3 py-1.5 text-sm text-white">Hapus
                    {{ count($imageGallery) }} Data</button>
            @endif
            @if (isset($listGallery))
                <ul class="grid grid-cols-3 gap-3">
                    @foreach ($this->listGallery as $item)
                        <li class="has-[:checked]:border-4 has-[:checked]:border-green-500 relative flex h-20 max-w-full items-center justify-center rounded-md border border-gray-500/40 bg-white bg-cover bg-center bg-no-repeat shadow-md"
                            style="background-image: url({{ route('gallery', $item->gambar) }})">
                            <input wire:key='{{ $item->id }}' value="{{ $item->id }}" wire:model='imageGallery'
                                id="checkbox-{{ $item->id }}" type="checkbox"
                                class="absolute inset-0 h-full w-full opacity-0">
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="col-span-2 row-start-3 flex justify-center gap-3">
<<<<<<< HEAD
            <button wire:ignore.self class="rounded bg-gray-500 px-5 py-2 font-semibold text-white" wire:loading wire:target="gallery"
                disabled>Loading...</button>
            <button wire:ignore.self type="button" wire:click='galleryAdd' wire:loading.disable wire:target='gallery'
                class="rounded bg-blue-500 px-5 py-2 font-semibold text-white" wire:loading.remove
                wire:target='gallery'>Tambah</button>
=======
            <button class="rounded bg-gray-500 px-5 py-2 font-semibold text-white" wire:loading wire:target="gallery"
                disabled>Loading...</button>
            <button type="button" wire:click='galleryAdd' wire:loading.disable wire:target='gallery'
                class="rounded bg-blue-500 px-5 py-2 font-semibold text-white" wire:loading.remove
                wire:target="gallery">Tambah</button>
>>>>>>> 258c3df4ededd8efa1f832e95db3dbb9a773cc1f
            <button id="cancelModalDelGal" type="button"
                class="rounded bg-red-500 px-5 py-2 font-semibold text-white">Batal</button>
        </div>
    </form>
</div>

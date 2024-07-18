<div id="saranaBg" wire:ignore.self wire:submit='galleryAdd'
    class="pointer-events-none absolute left-0 top-0 z-50 flex h-full w-full items-center justify-center overflow-auto bg-black/30 py-10 opacity-0 backdrop-blur-sm transition-all">
    <form id="saranaModal" wire:ignore.self
        class="absolute grid w-full max-w-[500px] grid-cols-2 gap-3 rounded bg-white p-5 opacity-0 transition-all ease-linear">
        @csrf
        <h2 class="col-span-2 text-center text-xl font-bold">Sarana Pariwisata</h2>
        <div class="row-span-2 w-full gap-2">
            @foreach ($sarana as $index => $item)
                <div class="mb-2 w-full">
                    <label for="sarana-{{ $index }}">Sarana {{ $index + 1 }}</label>
                    <input id="sarana-{{ $index }}" type="text" wire:model='sarana.{{ $index }}'
                        class="border border-gray-500/30">
                </div>
            @endforeach
            <button wire:click="addInputSarana" type="button"
                class="w-max rounded bg-green-500 px-2 py-1 capitalize text-white">tambah</button>
        </div>
        <div class="row-span-2 flex w-full flex-col overflow-y-auto gap-2">
            @if (isset($dataSarana))
                @foreach ($dataSarana as $item)
                    <ul class="flex w-full justify-between">
                        <li>{{ $item->sarana }}</li>
                        <li><button wire:key='{{ $item->id }}' wire:click='deleteSarana({{ $item->id }})' wire:confirm='Apakah anda yakin ingin menghapus sarana ini ?' class="bg-red-500 px-2 py-1 text-white rounded font-semibold">Hapus</button></li>
                    </ul>
                @endforeach
            @endif
        </div>

        <div class="col-span-2 flex justify-center gap-3">
            <button type="button" wire:click='simpanSarana' wire:loading.disable wire:target='#'
                class="rounded bg-blue-500 px-5 py-2 font-semibold text-white" wire:loading.remove
                wire:target="#">Tambah</button>
            <button id="cancelModalSarana" type="button"
                class="rounded bg-red-500 px-5 py-2 font-semibold text-white">Batal</button>
        </div>
    </form>
</div>

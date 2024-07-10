<?php

namespace App\Livewire\Admin;

use App\Models\Wisata as ModelsWisata;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Wisata extends Component
{
    use WithFileUploads;

    public $search, $nama_wisata, $deskripsi, $harga, $whatsapp, $gambar, $latitude, $longitude, $isChecked = [];
    public $formatWA = '+62';


    public function favorit($id)
    {
        $wisata = ModelsWisata::find($id);
        if ($wisata) {
            $wisata->favorit = !$wisata->favorit;
            $wisata->save();
            $this->isChecked[$id] = $wisata->favorit;
        }
    }

    public function mount()
    {
        $this->inisialisasiIsChecked();
    }

    public function inisialisasiIsChecked()
    {
        $wisatas = ModelsWisata::all();
        foreach ($wisatas as $wisata) {
            $this->isChecked[$wisata->id] = $wisata->favorit;
        }
    }

    public function tambahWisata()
    {

        if ($this->gambar) {
            $photo = $this->gambar;
            $new_photo_name = uniqid() . '.' . $photo->getClientOriginalExtension();
            // $new_photo_name = $photo->getClientOriginalName();
            $photo->storeAs('public/gambar-wisata', $new_photo_name);

            $wisata = new ModelsWisata();
            $wisata->nama_wisata = $this->nama_wisata;
            $wisata->harga = currencyIDRToNumeric($this->harga);
            $wisata->deskripsi = $this->deskripsi;
            $wisata->gambar = $this->gambar;
            $wisata->latitude = $this->latitude;
            $wisata->longitude = $this->longitude;
            $wisata->whatsapp = $this->formatWA . $this->whatsapp;
            $wisata->gambar = $new_photo_name;
            $wisata->favorit = '0';
            $wisata->save();

            $this->nama_wisata = '';
            $this->harga = '';
            $this->deskripsi = '';
            $this->gambar = '';
            $this->latitude = '';
            $this->longitude = '';
            $this->whatsapp = '';
            $this->gambar = '';

            session()->flash('message', 'Data wisata berhasil ditambahkan!');
            $this->dispatch('show-notif');
            $this->dispatch('reset-map');
        }

        $this->inisialisasiIsChecked();
    }

    public function edit($id)
    {
        $wisata = ModelsWisata::find($id);
        dd($wisata);
    }

    public function render()
    {
        // if ($this->search != null) {
        //     $data = invoice::where('no_faktur', 'like', '%' . $this->search . '%')
        //         ->orWhere('status', 'like', '%' . $this->search . '%')
        //         ->with(['toko', 'user', 'mobil'])
        //         ->paginate();
        // } else {
        //     $data = invoice::orderBy('status', 'asc')
        //     ->paginate(1000);
        // }

        $data = ModelsWisata::where('nama_wisata', 'like', '%' . $this->search . '%')
            // ->orWhere('kategori', 'like', '%' . $this->search . '%')
            ->orWhere('harga', 'like', '%' . $this->search . '%')
            ->get();


        return view('livewire.admin.wisata', compact('data'));
    }
}

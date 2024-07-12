<?php

namespace App\Livewire;

use App\Models\Komentar;
use Livewire\Component;

class Ulasan extends Component
{
    public $nama, $komentar;

    public function tambahKomentar()
    {
        $this->validate([
            'nama' => 'required',
            'komentar' => 'required'
        ], [
            'nama.required' => 'Nama perlu diisi',
            'komentar.required' => 'Komentar perlu diisi'
        ]);
        $komentar = new Komentar();
        $komentar->nama = $this->nama;
        $komentar->komentar = $this->komentar;
        $komentar->save();

        $this->nama = '';
        $this->komentar = '';

        session()->flash('message', 'Terima Kasih atas Ulasan anda');
        $this->dispatch('notifUlasan');
    }

    public function render()
    {
        return view('livewire.ulasan');
    }
}

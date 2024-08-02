<?php

namespace App\Livewire\Admin;

use App\Models\Komentar as ModelsKomentar;
use Livewire\Component;

class Komentar extends Component
{
    public function render()
    {
        $komentar = ModelsKomentar::get();
        return view('livewire.admin.komentar', compact('komentar'));
    }
}

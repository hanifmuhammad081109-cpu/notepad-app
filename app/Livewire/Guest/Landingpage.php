<?php

namespace App\Livewire\Guest;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Landingpage extends Component
{
    public function render()
    {
        // Cukup menampilkan view landing page
        return view('livewire.guest.landingpage')
               ->layout('layouts.guest'); // Menggunakan layout guest bawaan
    }
}

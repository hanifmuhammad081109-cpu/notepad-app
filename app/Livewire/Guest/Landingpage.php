<?php

namespace App\Livewire\Guest;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

use Livewire\Component;

class Landingpage extends Component
{

    public function mount()
    {
        // Jika pengguna sudah login, arahkan ke dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('landingpage');
    }

    public function render()
    {
        // Cukup menampilkan view landing page
        return view('livewire.guest.landingpage')
               ->layout('layouts.guest'); // Menggunakan layout guest bawaan
    }
}

<?php

namespace App\Livewire\Admin;

use App\Models\Note;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        // Mengambil semua catatan milik user yang sedang login
        $notes = Note::where('user_id', \Illuminate\Support\Facades\Auth::id())->latest()->get();

        return view('livewire.admin.dashboard', [
            'notes' => $notes
        ]);
    }
}
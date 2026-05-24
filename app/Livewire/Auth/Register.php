<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public function register()
    {
        // 1. Validasi Input
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 2. Simpan User ke Database
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // 3. Login otomatis setelah daftar
        event(new Registered($user));
        Auth::login($user);

        // 4. Redirect ke dashboard
        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register')
               ->layout('layouts.guest');
    }
}
<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login - Website NotePad')]

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function authenticate()
    {
        //Validasi input
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required|',
        ]);

        //Coba Login
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended('/');
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}

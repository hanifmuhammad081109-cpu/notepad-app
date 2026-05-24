<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\session;        

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
            'password' => 'required|string',
        ]);

        //Coba Login
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended(route('dashboard'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}

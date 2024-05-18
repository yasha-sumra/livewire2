<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;
    public function login()
    {
        $formfiled = $this->validate([
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        // dd($formfiled);
        // dd(auth()->attempt($formfiled));
        if (auth()->attempt($formfiled)) {
            session()->regenerate();

            return redirect('/')->with('message', 'user loged in successfully !!!');
        } else {
            return redirect('/login')->with('message', 'Invalid Credentials');

        }
    }
    public function render()
    {
        return view('livewire.login');
    }
}

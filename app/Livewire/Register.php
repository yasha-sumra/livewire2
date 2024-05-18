<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    public $user;

    public $name;

    public $email;

    public $password;

    public $cpassword;

    public function mount(User $user)
    {
        $this->user = $user;
    }
    public function create(User $user)
    {

        $formfiled = $this->validate([
            "name"=> "required",
            "email"=> "required",
            "password"=> "required|min:6",
            "cpassword"=> "required|same:password",
        ]);

        unset($formfiled['cpassword']);

        $formfiled['password'] = bcrypt($formfiled['password']);

        // dd($formfiled);
        // dd($this->user,$formfiled);
        // dd($this->name, $this->email, $this->password, $this->cpassword);

        $user1 = $this->user->create($formfiled);

        auth()->login($user1);
        return redirect('/')->with('message','user created and loged in successfully');
    }
    public function render()
    {
        return view('livewire.register');
    }
}


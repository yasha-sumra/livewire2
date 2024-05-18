<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Logout extends Component
{


public $user;
    public function mount()
    {

        $user= auth()->user();
        // dd($user->password);
        auth()->logout();

        return redirect('/')->with('message','user logout !!!');
    }
    public function render()
    {
        return view('livewire.logout');
    }
}

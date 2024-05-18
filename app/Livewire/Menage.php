<?php

namespace App\Livewire;

use Livewire\Component;

class Menage extends Component
{
    public $listings ;

    public function  mount ()
    {
        $this->listings =  auth()->user()->Listings;

        // dd($this->listngs);
    }
    public function render()
    {
        return view('livewire.menage');
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;

class ListingCard extends Component
{

public $listing ;

public function mount($item)
{
    $this->listing = $item;
}
    public function render()
    {
        return view('livewire.listing-card');
    }
}

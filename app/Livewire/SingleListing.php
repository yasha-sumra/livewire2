<?php

namespace App\Livewire;

use App\Models\Listing;
use Illuminate\Http\Request;
use Livewire\Component;

class SingleListing extends Component
{
    public $listing;
    public $id;
    public function mount($id, Listing $listing)
    {
        $this->listing = $listing->find($id);
        // dd($listing);

    }
    public function render()
    {
        return view('livewire.single-listing', ['listing' => $this->listing]);
    }
}

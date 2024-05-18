<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;

class Delete extends Component
{
    public $listing;
    public $id;
    public function mount(Listing $listing, $id)
    {
        $this->listing = $listing;
        $this->id = $id;

        // dd($this->id,$this->listing);
    }
    public function delete()
    {
        // dd($this->id, $this->listing);

        // dd();

        $this->listing->delete();

        return redirect(url('/'))->with('message', 'Listing deleted successfully');


        // Listing::delete($this->listing);
    }
    public function render()
    {
        return view('livewire.delete');
    }
}

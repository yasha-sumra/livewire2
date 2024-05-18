<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;


class Create extends Component
{

    use WithFileUploads;
    // id
    // title
    // company
    // location
    // website
    // email
    // discription
    // tags

    public $id;
    public $title = "";
    public $company;
    public $location;

    public $website;
    public $email;
    public $logo;
    public $discription;
    public $tags;
    public function render()
    {
        return view('livewire.create');
    }

    public function store(Listing $listing)
    {

        $formfileds
            = $this->validate([
                "title" => 'required',
                "company" => 'required',
                "location" => 'required',
                "website" => 'required',
                "email" => 'required',
                "tags" => 'required',
                "logo" => 'required|image',
                "discription" => 'required',
            ]);

        // dd($this->logo["originalName"]);
        $formfileds['user_id'] = auth()->id();


        $formfileds['logo'] =  $this->logo->store('photos', 'public');
        // dd($formfileds['logo']);

        $save = $listing->create($formfileds);

        return redirect('/')->with("message", "Listing created successfully !!");
    }
}

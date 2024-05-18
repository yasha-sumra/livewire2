<?php

namespace App\Livewire;

use App\Models\Listing;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class Edit extends Component
{
    use WithFileUploads;
    public $id;
      public $title;
    public $company;
    public $location;

    public $website;
    public $email;
    public $logo;
    public $discription;
    public $tags;
    public $listing;
    public function mount($id, Listing $listing)
    {
        $this->listing =  $listing->find($id);
        $this->title = $this->listing->title;
        $this->company = $this->listing->company;
        $this->location = $this->listing->location;
        $this->website = $this->listing->website;
        $this->logo = $this->listing->logo;
        $this->discription = $this->listing->discription;
        $this->tags = $this->listing->tags;
        $this->email = $this->listing->email;
    }

    public function delete()
    {
        dd($this->id);
    }
    public function edit(Listing $listing)
    {
        // dd($this);
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


        // dd($this->listing->logo, $formfileds["logo"]);

        if ($this->listing->logo == $formfileds["logo"]) {
            // dd("same same ");
        } else {
            // dd("diphlent");
            $oldlogo = Storage::files('public/photos/');

            foreach ($oldlogo as $logo1) {
                $x = $logo1;
                $logo1 = str_replace("public/", "", $x);
                if ($logo1 == $this->listing->logo) {

                    Storage::disk('public')->delete($logo1);
                    // dd($logo1, $this->listing->logo, $formfileds['logo']);

                    $formfileds['logo'] =
                        $this->logo->store('photos', 'public');
                }
            }
        }


        $update = $this->listing->update($formfileds);

        return redirect(url('Listing/' . $this->id))->with('message', 'Listing updated successfully');
    }
    public function render()
    {
        return view('livewire.edit', ['listing' => $this->listing]);
    }
}

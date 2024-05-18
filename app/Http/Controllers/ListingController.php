<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index()
    {
        $listing= \App\Models\Listing::all();
        return view('pages.index',["listings"=>$listing]);
    }
}

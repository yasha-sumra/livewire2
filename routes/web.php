<?php

use App\Livewire\Edit;
use App\Livewire\Login;
use App\Livewire\Create;
use App\Livewire\Delete;
use App\Livewire\Logout;
use App\Livewire\Menage;
use App\Livewire\Register;
use App\Livewire\SingleListing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ListingController::class,'index']);
Route::get('/Listing/{id}', SingleListing::class);


Route::post('/Listing/{id}/delete',Delete::class)->middleware("auth");
Route::get('create', Create::class)->middleware("auth");


Route::get('Listing/edit/{id}', Edit::class)->middleware("auth");
Route::post('Listing/edit/{id}', Edit::class)->middleware("auth");

Route::get('/meneage',Menage::class)->middleware("auth");


Route::get('register', Register::class)->middleware('guest');;

Route::get('login', Login::class)->name('login')->middleware('guest');;
Route::get('logout',Logout::class)->middleware("auth");

// Route::Post('/store',[Register::class,'store']);

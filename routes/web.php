<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::redirect('/', 'contacts');
Route::resource('contacts', ContactController::class);
Route::post('/contacts/{contact}/favorite',
[ContactController::class, 'favorite']
)->name('contacts.favorite');
Route::get('/favorites', [ContactController::class, 'favorites'])
->name('contacts.favorites');
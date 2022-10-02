<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Livewire\Contacts;
use App\Http\Livewire\Confirms;
use App\Http\Livewire\Thanks;
use App\Http\Controllers\Api\AddressController;

Route::get('/', Contacts::class)->name('form');
Route::get('/confirm', Confirms::class)->name('confirms');
Route::get('/thanks', Thanks::class)->name('thanks');
Route::get('/address/{zip}', [AddressController::class, 'address']);
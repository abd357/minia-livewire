<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('livewire.dashboard');
});
Route::get('/fiat', function () {
    return view('livewire.fiat');
});

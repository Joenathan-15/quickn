<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

Route::get('/',Welcome::class);
Route::get('/login',Login::class);
Route::get('/register',Register::class);

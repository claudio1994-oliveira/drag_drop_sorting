<?php

use Illuminate\Support\Facades\Route;

auth()->loginUsingId(1);

Route::get('/', \App\Livewire\Links::class);

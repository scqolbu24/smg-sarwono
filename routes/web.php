<?php

use App\Http\Controllers\PerulanganController;
use Illuminate\Support\Facades\Route;


Route::resource("/", PerulanganController::class);

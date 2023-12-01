<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;

Route::resource('colors', ColorController::class);
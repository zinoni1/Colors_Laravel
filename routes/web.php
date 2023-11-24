<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColorController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/colors", function(){
    return view('colors');
});
Route::get('colors', [ColorController::class, "index"]);

Route::resource('colors', ColorController::class);

Route::get('/colors/{id}', 'ColorController@show')->name('colors.show');
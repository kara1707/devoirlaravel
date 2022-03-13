<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('taches', TacheController::class);
Route::get('/', function () {
    return view('welcome');
});

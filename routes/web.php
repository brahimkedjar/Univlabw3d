<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\objects3d_C;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/objects3", objects3d_C::class);

use App\Http\Controllers\TpController;
Route::resource('tps', TpController::class);
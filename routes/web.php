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
// for usage see
// https://github.com/BrahimKedjar/Univlabw3d/pull/13#issuecomment-1365069711
Route::get('/modules/{module}/tps', [TpController::class, 'index']);
Route::get('/tps/{tp}', [TpController::class, 'show']);
Route::post('/tps', [TpController::class, 'store']);
Route::put('/tps/{tp}', [TpController::class, 'update']);
Route::delete('/tps/{tp}', [TpController::class, 'destroy']); 
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\TpController;
use App\Http\Controllers\objects3d_C;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/login', [AuthController::class,'login'])->name('login');
//Public Routes
Route::resource('/tps', TpController::class);
Route::get('allObject3D', [objects3d_C::class, 'getObject']);
//Protected routes
Route::post('/register', [AuthController::class,'register'])->name('register');
Route::resource('/modules', ModuleController::class);
Route::group(['middleware'=>['auth:sanctum']], function(){

});
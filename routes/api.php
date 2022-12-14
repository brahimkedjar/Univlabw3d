<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModuleController;
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


//Public Routes
Route::post('/login', [AuthController::class,'login']);
Route::post('/register', [AuthController::class,'register']);
Route::resource('/modules',ModuleController::class);
//Protected routes
//3Dobject
Route::delete('Departement_3Dobject/delete/{id}',[Departement_3DobjectController::class,'delete']);
Route::put('Departement_3Dobject/update/{id}',[Departement_3DobjectController::class,'update']);
Route::get('Departement_3Dobject/read/{id}',[Departement_3DobjectController::class,'read']);
Route::post('Departement_3Dobject/create',[Departement_3DobjectController::class,'create']);
//c

Route::group(['middleware'=>['auth:sanctum']], function(){
Route::post('/logout',[AuthController::class, 'logout']);
});


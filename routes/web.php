<?php

use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('/ulogin',[ViewController::class, 'signin']);
Route::get('/admin', [ViewController::class, 'admin']);
Route::get('/home_physics',[ViewController::class, 'homePhysics']);
Route::get('/lab_physics',[ViewController::class, 'labPhysics']);
Route::get('/home_chemistry',[ViewController::class, 'homeChemistry']);
Route::get('/lab_chemistry',[ViewController::class, 'labChemistry']);
Route::get('/teacher',[ViewController::class, 'teacherProfile']);
Route::get('/student',[ViewController::class, 'studentProfile']);


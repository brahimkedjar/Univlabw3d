<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Auth;




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
    if (Auth::check()) {
        return redirect()->route('student_profile');
    } else
        return view('FrontEnd.Index');
});
Route::get('/login_form', [ViewController::class, 'login_form'])->name('login_form');
Route::get('/admin_form', [ViewController::class, 'admin_form'])->name('admin_form');
Route::post('/modules', [ModuleController::class, 'store'])->name('modules.store');
Route::post('/Teacher', [TeacherController::class, 'store'])->name('teachers.store');
Route::get('show/{id}', 'ModuleController@showModuleTPs');
Route::get('/module/{module_id}', 'ModuleController@showModuleTPS');
Route::get('/public/sign.blade.php')->name('sign');
Route::get('getSpeciality/{id}', [SpecialityController::class, 'getSpeciality']);
Route::middleware(['auth'])->group(function () {
Route::get('/student_profile', [ViewController::class, 'student_profile'])->name('student_profile');
Route::get('/Teacher_profile', [ViewController::class, 'Teacher_profile'])->name('Teacher_profile');
Route::get('/Lab', [ViewController::class, 'Lab'])->name('Lab');
Route::get('/Tps', [ViewController::class, 'Tps'])->name('Tps');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
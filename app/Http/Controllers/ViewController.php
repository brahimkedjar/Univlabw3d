<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    //
    public function login_form(){
        
        return view('signin.sign');
    }
    public function admin_form()
    {

        return view('admin.Admin');
    }
    public function student_profile(){
        if (Auth::guest()) {
 //is a guest so redirect
 return redirect('signin.sign');
}else 
        
    return view('profile.Student_Profile');
    }
    public function Teacher_profile(){
        return view('profile.Teacher_Profile');
    }
    public function Lab()
    {
        return view('Physics.Physique_lab');
    }
    public function Lab_tst()
    {
        return view('Physics.Physics_tst');
    }
    public function logout_tst()
    {
        return view('FrontEnd.Index');
    }
    public function chim_tst()
    {
        return view('Chemistry.Chemistry_tst');
    }
    public function Tps()
    {
        return view('Physics.Physics');
    }
}
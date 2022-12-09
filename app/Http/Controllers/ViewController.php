<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function signin(){
        return view('sign');
    }

    public function signup(){

    }
    public function admin(){
        return view('admin');
    }
    public function logout(){
        return view('index');
    }

    public function homePhysics(){
        return view('Physics.physicshome');
    }
    public function labPhysics(){
        return view('Physics.physics_lab');
    }
    public function homeChemistry(){
        return view('Chemistry.home_chemistry');
    }
    public function labChemistry(){
        return view('Chemistry.chemistry_Lab');
    }
    public function teacherProfile(){
        return view('Profile.teacher_Profile');
    }
    public function studentProfile(){
        return view('Profile.student_profile');
    }
}

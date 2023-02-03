<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    //
    public function store(Request $request)
    {
        $teacher = Teacher::create([
            'Teacher_ID' => $request->Teacher_ID,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'department' => $request->department,
            'email' => $request->email,
        ]);
        return response()->json($teacher);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\objects3d;
use Carbon\Carbon; 


class objects3d_C extends Controller
{
    public function getObject()
    {
        return objects3d::All();
    }
}

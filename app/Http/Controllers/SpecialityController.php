<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Speciality;
use Illuminate\Console\Events\ScheduledTaskSkipped;
use Illuminate\Http\Request;
use Validator;
use Response;
use Redirect;
use Psy\Readline\Hoa\Console;

class SpecialityController extends Controller
{
    /*public function getSpecaility(Request $request)
    {
    dd($request->speciality_id);
    //$speciality=Speciality::whereid($request->departement_id)->orderBy('speciality')->get();
    $specialities = Departement::wheredepartement_id($request->departement_id)->get();
    return $specialities;
    }*/

    /* public function getSpeciality(Request $request)
    {
    $states=Speciality::whereid($request->departement_id)->orderBy('speciality')->get();
    return $states;
    }
    }
    */

    public function getSpeciality(Request $request)
    {
        
        $data['Specialities'] = Speciality::where("departement_id",$request->departement_id)->get(["speciality","id"]);
        return response()->json($data);
    }
}
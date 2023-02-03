<?php

namespace App\Http\Controllers;

use App\Models\Tp;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class TpController extends Controller
{
    public $rules = [
        'module_id' => 'nullable|numeric',
        'name'      => 'required|string',
        'rappel'    => 'required|string',
        'objectif'  => 'required|string',
        'materiel'  => 'required|string',
        'questions' => 'required|string',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 public static function index()
    {
        $tps = DB::table('tps')
            ->join('modules', 'tps.module_id', '=', 'modules.id')
            ->select('tps.*', 'modules.module_name')
            ->get();

         $res = response()->json(['tps' => $tps]);
        
        return response()->json($tps, 200)->getData();
    }
    public static function index_filtred()
    {
        $tps = DB::table('tps')
            ->join('modules', 'tps.module_id', '=', 'modules.id')
            ->select('tps.*', 'modules.module_name')
            ->get();

        $res = response()->json(['tps' => $tps]);

        return response()->json($tps, 200)->getData();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('tps.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
       
        if ($validator->fails()) return response()->json(null, 404);
        $tp=Tp::create([
            'name' => $request->name,
            'module_id' => $request->module_id,
            'rappel' => $request->rappel,
            'objectif' => $request->objectif,
            'materiel' => $request->materiel,
            'questions' => $request->questions]);
        return response()->json($tp);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showModuleTPS($module_id)
    {
        $tps = TP::where('module_id', $module_id)->get();
        return view('tps.index', compact('tps'));
    }
    public function show($id)
    {
         $tp = DB::table('tps')
            ->join('modules', 'tps.module_id', '=', 'modules.id')
            ->select('tps.*', 'modules.module_name')
            ->where('tps.id', '=', $id)
            ->first();

        if (!$tp) return response()->json(null, 404);
        return response()->json($tp, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tp  $tp
     * @return \Illuminate\Http\Response
     */
    public function edit(Tp $tp)
    {
        // return view('tps.edit',compact('tp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tp  $tp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tp $tp)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) return response()->json(null, 404);
        $tp->fill($request->post())->save();
        return response()->json('Tp has been updated successfully.', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tp  $tp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tp $tp)
    {
        $res = $tp->delete();

        if (!$res) return response()->json(null, 404);
        return response()->json('Tp has been deleted successfully.', 200);
    }
}
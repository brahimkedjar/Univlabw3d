<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\objects3d;


class objects3d_C extends Controller
{
    //
    public function index()
    {
        $objects3D = objects3d::all();
        return view ('objects3D.index')->with('objects3D', $objects3D);
    }

    public function create()
    {
        return view('objects3D.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        objects3d::create($input);
        return redirect('objects3')->with('flash_message', 'objects3 Addedd!');  
    }
    public function show($id)
    {
        $objects3 = objects3d::find($id);
        return view('objects3D.show')->with('objects3D', $objects3);
    }
 
    public function edit($id)
    {
        $objects3 = objects3d::find($id);
        return view('objects3D.edit')->with('objects3D', $objects3);
    }

    public function update(Request $request, $id)
    {
        $objects3 = objects3d::find($id);
        $input = $request->all();
        $objects3->update($input);
        return redirect('objects3')->with('flash_message', 'objects3 Updated!');  
    }
    public function destroy($id)
    {
        objects3d::destroy($id);
        return redirect('objects3')->with('flash_message', 'objects3 deleted!');  
    }
}

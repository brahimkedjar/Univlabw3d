<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModuleRequest;
use App\Models\Module;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
        $modules = Module::where('');
        return $this->success([
            'modules'=>$modules,
        ]);
    }
    public function store(StoreModuleRequest $request)
    {
        $request->validated($request->all());

        $module = Module::create([
            'module_name'=>$request->module_name,
            'levels_id' =>$request->levels_id,
            'specialities_id'=>$request->specialities_id,
            'user_id' =>$request->user_id,
        ]);
        return $this->success([
            'modules' =>$module,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $module = Module::find($id);
        $module->update($request);
        return $module;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module = Module::destroy($id);
        return $this->success([
            'message'=>'deleted successfull',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Module::find($id);
    }
}

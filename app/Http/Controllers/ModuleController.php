<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModuleRequest;
use App\Models\Module;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    use HttpResponses;
    public function index()
    {
        $modules = Module::all();

        return $this->success([
            'modules'=>$modules,
        ],'successful');
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
            'module'=>$module,
        ],'successful');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     *
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
     *
     */
    public function destroy($id)
    {
        return Module::destroy($id);
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function show($id)
    {
        $module = Module::find($id);
        if($module!=null){
            return $this->success([
                'module'=>$module,
            ],'found');
        }else{
            return $this->error('','module not found', 404);
        }

    }
}

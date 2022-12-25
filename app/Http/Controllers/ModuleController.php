<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModuleRequest;
use App\Models\Module;
use App\Traits\HttpResponses;


class ModuleController extends Controller
{


    use HttpResponses;
    public function store(StoreModuleRequest $request)
    {
        $request->validated($request->all());

        $module = Module::create([
            'module_name'=>$request->module_name,
            'levels_id' =>$request->levels_id,
            'specialities_id'=>$request->specialities_id,
            'user_id' =>$request->user_id,
        ]);
        $user1 = Module::where(
            'module_id',
            $request->module_id,
            'module_name',
            $request->module_name
        )->first();
        $request->session()->put('data', $user1);
        return $this->success([
            'modules' =>$module,
            'session'=> session('data')
        ]);
    }


}
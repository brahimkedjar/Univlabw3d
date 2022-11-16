<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreModuleRequest;
use App\Models\Module;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

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
        ]);
        return $this->success([
            'modules' =>$module,
        ]);
    }


}

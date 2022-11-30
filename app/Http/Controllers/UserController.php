<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $users = User::all();
        if($users){
            return $this->success([
                'users'=>$users,
            ],'successful');
        }else{
            return $this->error('','database empty',404);
        }

    }
    /**
     * Store a newly created resource in storage.
     *
     *
     *
     */
    public function showrole($role){
        $users = User::where('role_id',$role)->get();
        if($users){
            return $this->success([
                'user'=>$users,
            ],'found');
        }else{
            return $this->error('','users not found', 404);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $user = User::find($id);
        if($user){
            return $this->success([
                'user'=>$user,
            ],'found');
        }else{
            return $this->error('','users not found', 404);
        }

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $del =User::destroy($id);
        if($del){
            return $this->success('','deleted');
        }else{
            return $this->error('','user not found,',404);
        }
    }
}

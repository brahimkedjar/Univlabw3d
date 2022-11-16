<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(LoginUserRequest $request){
        $request->validated($request->all());
        if(!Auth::attempt($request->only(['inscription_number', 'password']))){
            return $this->error('', 'Credentials do not match', 401);
        }
        $user = User::where('inscription_number', $request->inscription_number)->first();
        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token of '.$user->name)->plainTextToken
        ]);
    }
//'role' =>$request->role, 'speciality' =>$request->speciality, 'group' => $request->group,
    public function register(StoreUserRequest   $request){
        $request->validated($request->all());

        $user = User::create([
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'inscription_number' => $request->inscription_number,
            'last_name' =>$request->last_name,
            'role_id' =>$request->role_id,
            'speciality_id' =>$request->speciality_id,
            'group_id' => $request->group_id,
            'username' => $request->username,
        ]);
        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token of '.$user->name)->plainTextToken
        ]);
    }

    public function logout(){
    Auth::user()->currentAccessToken()->delete();
    return $this->success([
        'message' => 'Logout Successful, permissions revoked'
    ]
    );
    }
}

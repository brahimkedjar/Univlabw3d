<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{

    use HttpResponses;

    public function login(LoginUserRequest $request)
    {
        $request->validated($request->all());
        if (!Auth::attempt($request->only(['inscription_number', 'password'], $request->remember))) {
            return $this->error('', 'Credentials do not match', 401);
        }
        $user = User::where('inscription_number', $request->inscription_number)->first();
        $user1 = User::where(
            'inscription_number',
            $request->inscription_number,
            'username',
            $request->username,
            'email',
            $request->email,
            'departement_id',
            $request->departement_id,
            $request->speciality_id
            
        )->first();
        $request->session()->put('data', $user1);
        if ($user1['departement_id'] == 1) {
            $user1['departement_id'] = 'Physics';
        }
        if ($user1['departement_id'] == 2) {
            $user1['departement_id'] = 'Chemistry';
        }
        if ($user['departement_id'] == 1) {
            if (Auth::check()) {
                return view('Physics.Physics_modules');
            } else {
                return view('signin.sign');
            }
        }
        if ($user['departement_id'] == 2) {
            if (Auth::check()) {
                return (view('Chemistry.Chemistry'));
            } else {
                return view('signin.sign');
            }
        }
        return session('data');
    }
    //'role' =>$request->role, 'speciality' =>$request->speciality, 'group' => $request->group,

    public function register(Request $request)
    {
        $data = $request->input();
        $request->session()->put('data', $data);
        $user = User::create([
            'speciality_id' => $request->speciality_id,
            'departement_id' => $request->departement_id,
            'group_id' => $request->group_id,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'inscription_number' => $request->inscription_number,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
        ]);
        return ($this->success([
            'session' => session('data'),
            'user' => $user,
            'token' => $user->createToken('API Token of ' . $user->name)->plainTextToken
        ]));
    }

    public function logout()
    {
        auth()->user()->tokens->each(function ($token) {
            $token->delete();
        });
        Auth::logout();
        Session::flush();
        return redirect('/');;
    }
}
<?php

namespace App\Http\Controllers\Api;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
   /* public function register(Request $request) {
        try {
            //Validated
            $validateUser = \Illuminate\Support\Facades\Validator::make($request->all(), 
            [
                'inscription_number' => 'required',
                'username'=>'required',
                'email' => 'required|email|unique:users,email',
                'password' => 'required'
            ]);

            if($validateUser->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'valide_error',
                    'errors' => $validateUser->errors()
                ], 401);
            }}catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
        $data = User::create(['inscription_number'=>$request->inscription_number,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'username'=>$request->username]);
        return json_encode($data);
    }
    public function connexion(Request $request) {
        $utilisateurdonnes = $request->validate(['inscription_number'=>['required','integer'],
        'password'=>['required','string']]);
        $utilisateur = User::where('inscription_number', $utilisateurdonnes['inscription_number'])->first();
        if($utilisateur){
            $authtoken = $utilisateur->createToken('auth-token')->plainTextToken;
            return ($utilisateur);
        }else return response()->json([
                    'status' => false,
                    'message' => 'authuntification_errors',
                ]);
        
    }*/
    public function connexion(Request $request)
    {
        $utilisateurdonnes = $request->validate(['inscription_number'=>['required','integer'],
        'password'=>['required','string']]);
        $utilisateur = User::where('inscription_number', $utilisateurdonnes['inscription_number'])->first();
        if($utilisateur){ 
            $success['token'] =  $utilisateur->createToken('MyAuthApp')->plainTextToken; 
            $success['username'] =  $utilisateur->username;
   
            return Response()->json([$success, 'User signed in']);
        } 
        else{ 
            return Response()->json(['status' => false,
                    'message' => 'authuntification_Faild',]);
        } 
        
        
    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'inscription_number'=>'required','integer',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);
   
        if($validator->fails()){
            return Response()->json(['Error validation', $validator->errors()]);       
        }
   
        $input = $request->all();
        $input['password'] = ($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
        $success['username'] =  $user->username;
   
        return Response()->json([$success, 'User created successfully.']);
    }
   
}
<?php

namespace App\Http\Controllers\Api;
use App\Models\User;
use App\Traits\HttpResponses;
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
        $utilisateurdonnes = $request->validate(['inscription_number'=>['required','string'],
        'password'=>['required','string', 'min:8']]);
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
            'inscription_number'=>'required','string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'first_name' => 'required','string',
            'last_name' =>'required','string',
            'role_id' =>'required','unsignedBigInteger',
            'speciality_id' =>'required','unsignedBigInteger',
            'group_id' => 'required','unsignedBigInteger',
            'username' => 'required','string',
        ]);
   
        if($validator->fails()){
            return Response()->json(['Error validation', $validator->errors()]);       
        }
   
        $user = User::create([
            'first_name' => $request->first_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'inscription_number' => $request->inscription_number,
            'last_name' =>$request->last_name,
            'role_id' =>$request->role,
            'speciality_id' =>$request->speciality,
            'group_id' => $request->group,
            'username' => $request->username,
        ]);
        return Response()->json([
            'user' => $user,
            'token' => $user->createToken('API Token of '.$user->name)->plainTextToken
        ]);
    }
   
}
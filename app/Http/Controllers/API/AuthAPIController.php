<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthAPIController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email|unique:users',
            'password' =>'required'
        ]);

        $user_data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        $user = User::create($user_data);
        $token = $user->createToken("UserToken")->plainTextToken;

        return response()->json(
            [
                'status' =>true,
                'message' => "User Created Successfully",
                'token'=> $token,
            ]
        );
    }

    public function login(Request $request){

        $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        $user = User::where('email',$request->email)->first();

        if(!empty($user)){

            if(Hash::check($request->password,$user->password)){
                $token = $user->createToken("UserToken")->plainTextToken;

                return response()->json([
                    'status'=>true,
                    'message'=>'Logged In Successfully',
                    'token'=>$token
                ]);
            }

        }
        return response(
            [
                'message'=> 'Invalid Credentials',
                'status' => false
            ],
            200
        );
    }
}

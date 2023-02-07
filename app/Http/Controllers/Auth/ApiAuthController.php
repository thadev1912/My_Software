<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
class ApiAuthController extends Controller
{
    public function login (Request $request) {
        dd(Auth::attempt(
            [
                'name'=>$request->username,
                'password'=>$request->pass,
                
            ]));
            
        // $user = User::where('name', $request->name)->first();
        // dd($user);
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         $token = $user->createToken('Laravel Password Grant Client')->accessToken;
        //         $response = ['token' => $token];
        //         return response($response, 200);
        //     } else {
        //         $response = ["message" => "Password mismatch"];
        //         return response($response, 422);
        //     }
        // } else {
        //     $response = ["message" =>'User does not exist'];
        //     return response($response, 422);
        // }
    }
    public function logout (Request $request) {
    $token = $request->user()->token();
    $token->revoke();
    $response = ['message' => 'You have been successfully logged out!'];
    return response($response, 200);
}
}

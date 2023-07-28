<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class UserController extends Controller
{
    public function register(Request $request){

        $request->validate([
            'name' => 'required|string|max: 100',
            'email' => 'required|string|max: 100',
            'password' => 'required|confirmed',
        ]);

        $user= User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
        ]);

        $token = $user->createToken($request->name)->token->plainTextToken;

        return response([
            'user' => $user,
            'token' => $token
        ]);
    }

    public function admin(){
        return User::all();
    }



}

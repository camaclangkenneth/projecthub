<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

use App\User;
use JWTAuth;


class APIRegisterController extends Controller
{
    public function register(UserRequest $request)
    {
        User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'position' => $request->position,
            ]);
        $user = User::first();
        $token = JWTAuth::fromUser($user);

        return response()->json(compact('token'));
    }
}

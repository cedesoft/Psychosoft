<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        $credentials = request(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $token = $request->user()->createToken('Android_Development');
            return response()->json(['access_granted' => 'true', 'token' => $token->plainTextToken]);
        } else
            return response()->json(['access_granted' => 'false']);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Successfully logged out']);
    }
}

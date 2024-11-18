<?php

namespace App\Http\Controllers;

use App\Models\Gesusu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = Gesusu::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $token = JWTAuth::fromUser($user);

        return response()->json(compact('user', 'token'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

        return response()->json(compact('token'));
    }

    public function user()
    {
        return response()->json(auth()->user());
    }
}

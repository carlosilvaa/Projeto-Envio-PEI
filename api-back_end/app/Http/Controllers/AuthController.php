<!-- a principio acho que nao estamos usando esse auth controller para autenticacao -->
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

        try {
            $user = Gesusu::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);
            $token = JWTAuth::fromUser($user);
        
            return response()->json([
                'success' => true,
                'message' => 'Usuário registrado com sucesso.',
                'user' => $user,
                'token' => $token,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Erro ao registrar usuário.',
            ], 500);
        }
        
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => 'Credenciais inválidas.',
            ], 401);
        }        
        
        return response()->json([
            'success' => true,
            'message' => 'Login bem-sucedido.',
            'token' => $token,
        ]);        
    }

    public function user()
    {
        return response()->json(auth()->user());
    }
}

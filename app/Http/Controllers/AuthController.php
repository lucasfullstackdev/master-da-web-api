<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function me()
    {
        $user = auth()->user();

        return response()->json([
            'data' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email
            ]
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        /** Autenticando usuário */
        if (!auth()->validate($credentials)) {
            abort(401);
        }

        /** Obtendo usuário autenticado e registrando login */
        $user = User::where('email', $request->only('email'))->first();
        $token = auth()->login($user);

        // dd(auth()->user());

        return response()->json([
            'data' => [
                'token' => $token,
                'token_type' => 'bearer',
                'expires_in' => auth()->factory()->getTTL() * 60
            ]
        ]);
    }

    public function logout(): void
    {
        auth()->logout();
    }
}

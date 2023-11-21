<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            // Vous pouvez ajouter d'autres règles de validation si nécessaire
        ]);

        // Tenter de se connecter
        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();

            // Générer un nouveau token Sanctum
            $token = $request->user()->createToken('api-token')->plainTextToken;

            return response()->json([
                'message' => 'Login successful',
                'token' => $token,
            ]);
        }

        // Si l'authentification échoue, retourner une erreur
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }


    public function register(Request $request)
    {
        // Validation des données de la requête
        $validatedData = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Si la validation échoue, retourner une réponse d'erreur
        if ($validatedData->fails()) {
            return response()->json(['errors' => $validatedData->errors()], 422);
        }

        // Création de l'utilisateur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Connexion de l'utilisateur et création d'un token
        $token = $user->createToken('api-token')->plainTextToken;

        // Retourner une réponse JSON avec les détails de l'utilisateur et le token
        return response()->json([
            'user' => $user,
            'token' => $token
        ], 201);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return response()->json(['message' => 'Logged out successfully']);
    }

    public function createToken(Request $request)
    {
        try {
            $token = $request->user()->createToken('api-token');

            return response()->json(['token' => $token->plainTextToken]);
        } catch (\Exception $e) {
            return response()->json(['message' => "You can t create Token"], 401);
        }
    }

    //Check token validity
    public function verifyToken(Request $request)
    {
        try {

            return response()->json([
                'message' => 'Token is valid',
                'user' => $request->user(),
            ]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Token is not valid'], 401);
        }
    }
}

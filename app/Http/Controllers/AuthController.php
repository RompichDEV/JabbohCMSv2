<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validation des données du formulaire
        $this->validate($request, [
            'usernameOrEmail' => 'required',
            'password' => 'required',
        ]);

        // Recherche de l'utilisateur par email ou pseudonyme
        $user = User::where('username', $request->usernameOrEmail)
                    ->orWhere('mail', $request->usernameOrEmail)
                    ->first();

        if (!$user) {
            return redirect('/login')->with('errors', ['Utilisateur introuvable']);
        }

        // Vérification du mot de passe
        if (!Hash::check($request->password, $user->password)) {
            return redirect('/login')->with('errors', ['Mot de passe incorrect']);
        }

        // Connexion réussie
        return redirect('/home')->with('message', 'Connexion réussie!');
    }
}

<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Gérer la soumission du formulaire de connexion
    public function login(Request $request)
    {
        // Logique d'authentification
    }

    // Afficher le formulaire d'inscription
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Gérer la soumission du formulaire d'inscription
    public function register(Request $request)
    {
        // Logique d'inscription
    }

    // Déconnexion de l'utilisateur
    public function logout(Request $request)
    {
        // Logique de déconnexion
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Users; // Utilisez le modèle Users
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        // Récupérez les utilisateurs en spécifiant les colonnes "firstname" et "lastname"
        $users = Users::select('firstname', 'lastname')->get();

        return view('users', compact('users'));
    }

    // Vous pouvez ajouter d'autres méthodes pour créer, mettre à jour, supprimer des utilisateurs, etc.
}

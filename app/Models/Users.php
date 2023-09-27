<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users'; // Assurez-vous que le nom de la table correspond à votre table de base de données

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
    ];

    // Vous pouvez ajouter des méthodes ou des relations ici
}

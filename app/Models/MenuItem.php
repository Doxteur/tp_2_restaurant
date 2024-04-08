<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'name', // Nom de l'article du menu
        'description', // Description de l'article
        'price', // Prix de l'article
        // Autres champs pertinents à votre système de menu
    ];

    // Vous pouvez ajouter d'autres méthodes et relations ici en fonction des besoins de votre application
}

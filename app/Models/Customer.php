<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', // Nom du client
        'email', // Email du client
        'phone', // Numéro de téléphone du client
        'loyalty_points', // Points de fidélité du client
        // Autres champs pertinents à votre système de gestion des clients
    ];

    // Vous pouvez ajouter d'autres méthodes et relations ici en fonction des besoins de votre application
}

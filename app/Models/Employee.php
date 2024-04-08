<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'name', // Nom de l'employé
        'address', // Adresse de l'employé
        'phone', // Numéro de téléphone de l'employé
        'role', // Rôle de l'employé (serveur, chef de cuisine, etc.)
        // Autres champs pertinents à votre système de gestion des employés
    ];

    // Vous pouvez ajouter d'autres méthodes et relations ici en fonction des besoins de votre application
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name', // Nom du fournisseur
        'contact_name', // Nom du contact
        'email', // Email du fournisseur
        'phone', // Numéro de téléphone du fournisseur
        // Autres champs pertinents à votre système de gestion des fournisseurs
    ];

    // Vous pouvez ajouter d'autres méthodes et relations ici en fonction des besoins de votre application
}

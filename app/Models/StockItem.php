<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockItem extends Model
{
    protected $fillable = [
        'name', // Nom de l'article de stock
        'quantity', // Quantité en stock
        'unit_price', // Prix unitaire
        // Autres champs pertinents à votre système de gestion de stock
    ];

    // Vous pouvez ajouter d'autres méthodes et relations ici en fonction des besoins de votre application
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'table_number', // Numéro de table pour la commande
        'customer_id', // ID du client
        'total_amount', // Montant total de la commande
        // Autres champs pertinents à votre système de commande
    ];

    // Définir la relation avec le client
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

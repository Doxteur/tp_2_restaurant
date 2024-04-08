<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'customer_id', // ID du client pour la réservation
        'table_number', // Numéro de table réservée
        'reservation_date', // Date de la réservation
        'reservation_time', // Heure de la réservation
        // Autres champs pertinents à votre système de réservation
    ];

    // Définir la relation avec le client
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    // Vous pouvez ajouter d'autres méthodes et relations ici en fonction des besoins de votre application
}

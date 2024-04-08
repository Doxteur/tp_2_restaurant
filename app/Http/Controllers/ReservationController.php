<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    // Récupérer toutes les réservations
    public function getAllReservations()
    {
        $reservations = Reservation::all();

        return response()->json(['data' => $reservations], 200);
    }

    // Créer une nouvelle réservation
    public function createReservation(Request $request)
    {
        $request->validate([
            'customer_id' => 'required',
            'table_number' => 'required',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            // Validez d'autres champs si nécessaire
        ]);

        $reservation = Reservation::create($request->all());

        return response()->json(['message' => 'Reservation created successfully', 'data' => $reservation], 201);
    }

    // Mettre à jour une réservation existante
    public function updateReservation(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $request->validate([
            'customer_id' => 'required',
            'table_number' => 'required',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
            // Validez d'autres champs si nécessaire
        ]);

        $reservation->update($request->all());

        return response()->json(['message' => 'Reservation updated successfully', 'data' => $reservation], 200);
    }

    // Annuler une réservation
    public function cancelReservation($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return response()->json(['message' => 'Reservation canceled successfully'], 200);
    }
}

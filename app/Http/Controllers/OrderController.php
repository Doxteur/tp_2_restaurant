<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    // Créer une nouvelle commande
    public function createOrder(Request $request)
    {
        $request->validate([
            'table_number' => 'required',
            'customer_id' => 'required',
            'total_amount' => 'required',
            // Validez d'autres champs si nécessaire
        ]);

        $order = Order::create($request->all());

        return response()->json(['message' => 'Order created successfully', 'data' => $order], 201);
    }

    // Obtenir une commande spécifique
    public function getOrder($id)
    {
        $order = Order::findOrFail($id);

        return response()->json(['data' => $order], 200);
    }

    // Mettre à jour une commande existante
    public function updateOrder(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'table_number' => 'required',
            'customer_id' => 'required',
            'total_amount' => 'required',
            // Validez d'autres champs si nécessaire
        ]);

        $order->update($request->all());

        return response()->json(['message' => 'Order updated successfully', 'data' => $order], 200);
    }

    // Supprimer une commande
    public function deleteOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['message' => 'Order deleted successfully'], 200);
    }
}

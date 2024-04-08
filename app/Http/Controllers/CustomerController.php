<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    // Récupérer tous les clients
    public function getAllCustomers()
    {
        $customers = Customer::all();

        return response()->json(['data' => $customers], 200);
    }

    // Ajouter un nouveau client
    public function createCustomer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            // Ajoutez d'autres validations si nécessaire
        ]);

        $customer = Customer::create($request->all());

        return response()->json(['message' => 'Customer created successfully', 'data' => $customer], 201);
    }

    // Mettre à jour les informations d'un client
    public function updateCustomer(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            // Ajoutez d'autres validations si nécessaire
        ]);

        $customer->update($request->all());

        return response()->json(['message' => 'Customer updated successfully', 'data' => $customer], 200);
    }

    // Supprimer un client
    public function deleteCustomer($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return response()->json(['message' => 'Customer deleted successfully'], 200);
    }
}

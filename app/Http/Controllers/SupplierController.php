<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    // Ajouter un nouveau fournisseur
    public function createSupplier(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            // Ajoutez d'autres validations si nécessaire
        ]);

        $supplier = Supplier::create($request->all());

        return response()->json(['message' => 'Supplier created successfully', 'data' => $supplier], 201);
    }

    // Mettre à jour les informations d'un fournisseur
    public function updateSupplier(Request $request, $id)
    {
        $supplier = Supplier::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'contact_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            // Ajoutez d'autres validations si nécessaire
        ]);

        $supplier->update($request->all());

        return response()->json(['message' => 'Supplier updated successfully', 'data' => $supplier], 200);
    }

    // Supprimer un fournisseur
    public function deleteSupplier($id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return response()->json(['message' => 'Supplier deleted successfully'], 200);
    }
}

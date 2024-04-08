<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem;

class MenuController extends Controller
{
    // Ajouter un nouvel article au menu
    public function createMenuItem(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            // Validez d'autres champs si nécessaire
        ]);

        $menuItem = MenuItem::create($request->all());

        return response()->json(['message' => 'Menu item created successfully', 'data' => $menuItem], 201);
    }

    // Mettre à jour un article du menu existant
    public function updateMenuItem(Request $request, $id)
    {
        $menuItem = MenuItem::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            // Validez d'autres champs si nécessaire
        ]);

        $menuItem->update($request->all());

        return response()->json(['message' => 'Menu item updated successfully', 'data' => $menuItem], 200);
    }

    // Supprimer un article du menu
    public function deleteMenuItem($id)
    {
        $menuItem = MenuItem::findOrFail($id);
        $menuItem->delete();

        return response()->json(['message' => 'Menu item deleted successfully'], 200);
    }
}

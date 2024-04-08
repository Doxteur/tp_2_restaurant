<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StockItem;

class StockController extends Controller
{
    // Récupérer tous les articles en stock
    public function getAllStockItems()
    {
        $stockItems = StockItem::all();

        return response()->json(['data' => $stockItems], 200);
    }

    // Récupérer un article en stock spécifique
    public function getStockItem($id)
    {
        $stockItem = StockItem::findOrFail($id);

        return response()->json(['data' => $stockItem], 200);
    }
}

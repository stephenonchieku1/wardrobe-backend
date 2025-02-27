<?php

namespace App\Http\Controllers;

use App\Models\ClothingItem;
use Illuminate\Http\Request;

class ClothingItemController extends Controller
{
    public function index() {
        return ClothingItem::all();
    }

    public function store(Request $request) {
        $request->validate([
        'name' => 'required|string|max:255',
        'brand' => 'required|string|max:255',
        'size' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'description' => 'nullable',
        ]);

        return ClothingItem::create($request->all());
    }

    public function show(ClothingItem $clothingItem) {
        return $clothingItem;
    }

    public function update(Request $request, ClothingItem $clothingItem) {
        $clothingItem->update($request->all());
        return $clothingItem;
    }

    public function destroy($id)
    {
        $clothingItem = ClothingItem::findOrFail($id);
        $clothingItem->delete();
        return response()->json(['message' => 'Clothing item deleted successfully']);
    }


}

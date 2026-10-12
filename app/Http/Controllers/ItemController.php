<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::latest()->get();
        return view('items', compact('items'));
    }

    public function create()
    {
        return view('create_item');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|numeric|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        Item::create($validated);

        return redirect()->route('items.index')->with('success', 'Barang berhasil ditambahkan!');
    }
}

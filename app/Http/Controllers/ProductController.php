<?php

namespace App\Http\Controllers;

use App\Models\Product; 
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Bütün məhsulları göstərin
    public function index()
    {
        return Product::all();
    }

    // Yeni məhsul əlavə edin
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        // Şəkil yükləmə 
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        $product = Product::create($validated);
        return response()->json($product, 201);
    }


    
    // Məhsulu göstər
    public function show($id)
    {
        return Product::findOrFail($id);
    }

    // Məhsulu yenilə
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
        ]);

        $product = Product::findOrFail($id);

        // Şəkil yükləmə (opsional)
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('images', 'public');
        }

        $product->update($validated);
        return response()->json($product);
    }

    // Məhsulu sil
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }
}

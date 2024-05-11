<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', 
            'description' => 'required',
            'price' => 'required|numeric',
        ]);


if (!$request->hasFile('image')) {
    $validatedData['image'] = 'default_image.jpg'; // Provide a default image name

} 


        $product = Product::create($validatedData);

        return redirect()->route('products.index')
                         ->with('success', 'Product created successfully.');
    }

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function edit($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }
        return view('products.update', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|max:255',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);
        
if ($request->hasFile('image')) {
    $validatedData['image'] = $request->input('image'); // Provide a default image name

}
        $product = Product::find($id);
        $product->update($validatedData);

        return redirect()->route('products.index')
                         ->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.index')->with('error', 'Product not found.');
        }
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}

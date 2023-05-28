<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{

//     Task 5: Controller

// Create a controller called ProductController that handles CRUD operations 
// for a resource called Product. Implement the following methods:

// index(): Display a list of all products.
// create(): Display the form to create a new product.
// store(): Store a newly created product.
// edit($id): Display the form to edit an existing product.
// update($id): Update the specified product.
// destroy($id): Delete the specified product.


// Answer - 5


    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $product = new Product;
        
        // assuming the request contains 'name', 'description' and 'price'
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('products.index');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products.index');
    }
}

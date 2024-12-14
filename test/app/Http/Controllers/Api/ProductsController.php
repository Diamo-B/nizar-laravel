<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductsController
{


    /**
     * Store a newly created resource in storage.
     */
    public function create(Request $request)
    {
        // Create a new product with the incoming request data
        $product = new Product();
        $product->id = Str::uuid();  // Generate UUID for the product
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity', null);  // Set quantity to null if not provided

        // Save the product to the database
        $product->save();

        // Return the created product with a success response
        return response()->json([
            'message' => 'Product created successfully',
            'data' => $product
        ], 201);
    }

}

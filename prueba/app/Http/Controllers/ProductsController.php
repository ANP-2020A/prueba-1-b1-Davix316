<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return products::all();
    }

    public function show(products $products)
    {
        return $products;
    }

    public function store(Request $request)
    {
        $products = products::create($request->all());
        return response()->json($products, 201);
    }

    public function update(Request $request, products $products)
    {
        $products->update($request->all());
        return response()->json($products, 200);
    }

    public function delete(Request $request, products $products)
    {
        $products->delete();
        return response()->json(null, 204);
    }
}

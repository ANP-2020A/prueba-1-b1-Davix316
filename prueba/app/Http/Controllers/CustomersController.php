<?php

namespace App\Http\Controllers;

use App\customers;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
        return customers::all();
    }

    public function show(customers $customers)
    {
        return $customers;
    }

    public function store(Request $request)
    {
        $customers = customers::create($request->all());
        return response()->json($customers, 201);
    }

    public function update(Request $request, customers $customers)
    {
        $customers->update($request->all());
        return response()->json($customers, 200);
    }

    public function delete(Request $request, customers $customers)
    {
        $customers->delete();
        return response()->json(null, 204);
    }
}

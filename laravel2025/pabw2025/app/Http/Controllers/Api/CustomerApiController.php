<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_customer = CustomerModel::all();

        return response()->json([
            'data'      => $data_customer,
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name'     => 'required|string|max:100',
            'phone_number'      => 'required|string|max:15',
            'city'              => 'required|string|max:50',
            'amt_paid'         => 'required|numeric',
        ]);

        $new_customer = CustomerModel::create([
            'customer_name'     => $request->customer_name,
            'phone_number'      => $request->phone_number,
            'city'              => $request->city,
            'amt_paid'          => $request->amt_paid,
        ]);

        if($new_customer){
            return response()->json([
                'message'   => 'Store customer berhasil',
            ], 201);
        }
        else{
            return response()->json([
                'message'   => 'Store customer gagal',
            ], 500);
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data_customer = CustomerModel::findOrFail($id);

        return response()->json([
            'data'      => $data_customer,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'customer_name'     => 'required|string|max:100',
            'phone_number'      => 'required|string|max:15',
            'city'              => 'required|string|max:50',
            'amt_paid'         => 'required|numeric',
        ]);

        $customer = CustomerModel::findOrFail($id);
        $update = $customer->update([
            'customer_name'     => $request->customer_name,
            'phone_number'      => $request->phone_number,
            'city'              => $request->city,
            'amt_paid'          => $request->amt_paid,
        ]);

        if(!$update){
            return response()->json(['message' => 'Failed to update Customer'], 500);
        }

        return response()->json(['message' => 'Customer updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $customer = CustomerModel::findOrFail($id);
        $delete = $customer->delete();
        if($customer){
            if(!$delete){
                return response()->json(['message' => 'Failed to delete Customer'], 500);
            }
            return response()->json(['message' => 'Customer deleted successfully'], 200);
        }
        return response()->json(['message' => 'Customer not found'], 404);
        
    }
}

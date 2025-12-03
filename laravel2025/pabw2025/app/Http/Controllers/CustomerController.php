<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;

class CustomerController extends Controller
{
    //
    public function index()
    {
        // SELECT * FROM table_customer
        $customers = CustomerModel::all();
        return view('customer/read', ['customers' => $customers]);
    }

    public function form()
    {
        return view('customer/create' );
    }

    public function store(Request $request)
    {
        /* INSERT INTO table_customer 
        (customer_name, phone_number, city, amt_paid) 
        VALUES (...) */
      CustomerModel::create([
          'customer_name' => $request->customer_name,
          'phone_number' => $request->phone_number,
          'city' => $request->city,
          'amt_paid' => $request->amt_paid,
      ]);
      return redirect('/form_customer')->with('success', 'Customer data has been saved successfully.');
    }
}

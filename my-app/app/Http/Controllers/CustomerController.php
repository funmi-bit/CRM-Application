<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Show the form for creating a new customer.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created customer in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:255|unique:customers',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'postcode' => 'required|max:255',
            'state' => 'required|max:255',
            'country' => 'required|max:255',
        ]);

        // Create a new customer record
        $customer = Customer::create($validatedData);

        // Redirect or return a response
        return redirect()->route('dashboard', $customer->id)
                         ->with('success', 'Customer registered successfully.');
    }

      /**
     * Display a listing of the customers.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(){
        $customers = Customer::all();
        return view('customers.index', compact('customers'));

    }
}
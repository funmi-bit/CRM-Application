<?php

namespace App\Http\Controllers;

use App\Models\ContactLog;
use App\Models\Product;

use Illuminate\Http\Request;


class ContactLogController extends Controller
{
    /**
     * Show the form for creating a new contact log.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all(); // Assuming you have a Product model
        return view('contact_logs.create', compact('products'));
    }

    /**
     * Store a newly created contact log in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'customer_first_name' => 'required|max:255',
            'customer_last_name' => 'required|max:255',
            'customer_phone' => 'required|numeric',
            'customer_email' => 'required|email|max:255',
            'product_id' => 'required|exists:products,id',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        // Create a new contact log record
        $contactLog = ContactLog::create($validatedData);

        // Redirect or return a response
        return redirect()->route('dashboard')->with('success', 'Contact log created successfully.');
    }

    /**
     * Display a listing of the contact logs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactLogs = ContactLog::all();
        return view('contact_logs.index', compact('contactLogs'));
    }

    /**
     * Show the form for editing the specified contact log.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contactLog = ContactLog::find($id);
        if (!$contactLog) {
            return response()->json([
                'error' => 'Contact log not found'
            ], 404);
        }
        return view('contact_logs.update', ['contactLog' => $contactLog]);
    }

    /**
     * Update the specified contact log in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate incoming request
        $validatedData = $request->validate([
            'customer_first_name' => 'required|max:255',
            'customer_last_name' => 'required|max:255',
            'customer_phone' => 'required|numeric',
            'customer_email' => 'required|email|max:255',
            'product_id' => 'required|exists:products,id',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        // Find the contact log by id
        $contactLog = ContactLog::find($id);

        // Update contact log details
        $contactLog->update($validatedData);

        // Redirect or return a response
        return redirect()->route('dashboard')->with('success', 'Contact log updated successfully!');
    }

    /**
     * Remove the specified contact log from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the contact log by id
        $contactLog = ContactLog::find($id);

        // Check if the contact log exists
        if (!$contactLog) {
            return redirect()->route('dashboard')->with('error', 'Contact log not found.');
        }

        // Delete the contact log
        $contactLog->delete();

        // Redirect with a success message
        return redirect()->route('dashboard')->with('success', 'Contact log deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all(); // Fetch all contact submissions
        return view('pages.contact-be.index', [
            'title' => 'contacts',
            'contacts' => $contacts,
        ]);// Pass data to view
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
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'company' => 'nullable|string|max:255',
        'service' => 'required|string',
        'additional_info' => 'nullable|string',
        'consent' => 'accepted',
        ]);
        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'company' => $request->input('company'),
            'service' => $request->input('service'),
            'additional_info' => $request->input('additional_info'),
            'consent' => $request->input('consent') ? true : false,
        ]);
        return redirect()->route('contact-be.index')->with('success', 'Contact form submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

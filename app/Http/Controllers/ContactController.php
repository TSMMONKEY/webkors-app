<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $validate = $request->validate([
            "name" => "required | string | max:255",
            "email" => "required | email | max:255",
            "subject" => "required | string | max:255",
            "message" => "required | string",
        ]);

        $contact = new Contact();
        $contact->name = $validate['name'];
        $contact->email = $validate['email'];
        $contact->subject = $validate['subject'];
        $contact->message = $validate['message'];
        // dd($request);

        $contact->save();

        return redirect()->route('thank-you')->with('success', 'Your message has been sent successfully! We’ll be in touch with you shortly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Contact $contact)
    {
        //  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}

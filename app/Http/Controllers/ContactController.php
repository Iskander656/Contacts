<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        // dd means Dump and Die. 
        // It prints the data and stops the application
        // dd($request->all());

        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:contacts,email',
            'phone' =>  'required|string|max:255',
        ]);
        Contact::create($validated);
        return redirect()->route('contacts.index')->with('success', 'Contact created succesfully!');
    }

    public function edit(Contact $contact)
    {
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'nullable|email|unique:contacts,email,' . $contact->id,
            'phone'      => 'required|string|max:255',
        ]);

        $contact->update($validated);

        return redirect()
            ->route('contacts.index')
            ->with('success', 'Contact updated successfully!');
    }


    public function destroy(Contact $contact) {
        $contact->delete();
        
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully!');
    }
}
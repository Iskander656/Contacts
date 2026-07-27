<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::latest()->paginate(10);
        return view('contacts.index', compact('contacts'));
        
    }
}
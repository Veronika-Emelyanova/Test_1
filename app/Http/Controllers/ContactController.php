<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller {

    public function create() {

        return view('contact_form');
    }

    public function index() {
        $contacts = Contact::all();
        return view('contact_form', compact('contacts'));
    }

    public function store(Request $request) {
        $contact = new Contact;

        $contact->name = $request->name;
        $contact->address = $request->address;
        $contact->mobile_number = $request->mobile_number;
        $contact->email = $request->email;

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string'],
            'mobile_number' => ['required', 'string', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255'],

        ]);
        $contact->save();

        return response()->json(['success'=>'Form is successfully submitted!']);
    }
}

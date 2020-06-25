<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->paginate(15);

        return view('admin.contact.list', compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);

        $contact->delete();

        return redirect()->back();
    }
}

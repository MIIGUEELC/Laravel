<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('miranda.contact');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name'  => 'required|string|max:255',
            'client_phone' => 'nullable|string|max:255',
            'client_email' => 'required|email|max:255',
            'subject'      => 'nullable|string|max:255',
            'comment'      => 'required|string',
        ]);

        // Guardar en la base de datos con 'read' en false
        $comment = Contact::create(array_merge($validated, ['read' => false]));

        // Enviar email al cliente
        Mail::to($validated['client_email'])->send(new ContactMail($validated));

        return redirect()->back()->with('success', 'Message sent!');
    }
}

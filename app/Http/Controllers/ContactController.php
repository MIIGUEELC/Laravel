<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Mockery\Matcher\Contains;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('hotel.contact');
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
            'name' => 'required|string',
            'phone' => 'required|string',
            'days' => 'required|string',
            'status' => 'required|string',
            'job_desc' => 'required|string',
        ]);

        $photo = 'https://avatars.githubusercontent.com/u/55525358';
        $date = Carbon::now();

        Contact::create([
            'name' => $request->name,
            'photo' => $photo,
            'join_date' => $date,
            'job_desc' => $request->job_desc,
            'phone' => $request->phone,
            'days' => $request->days,
            'status' => $request->status,
        ]);

        return redirect()->route('contact')->with('success', 'Contact created successfully');
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

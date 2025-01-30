<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Court;

class CourtController extends Controller
{
    /**
     * Display a listing of the court.
     */
    public function index()
    {
        $court = Court::all();
        return view('courts.index', compact('court'));
    }

    /**
     * Show the form for creating a new court.
     */
    public function create()
    {
        return view('courts.create');
    }

    /**
     * Store a newly created court in the database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:badminton,futsal',
            'price_per_hour' => 'required|numeric|min::0',

        ]);

        Court::create($validated);
        return redirect()->route('courts.index')->with('success', 'Court created successfully');
    }

    /**
     * Display the specified court.
     */
    public function show(Court $court)
    {
        return view('courts.show', compact('court'));
    }

    /**
     * Show the form for editing the specified court.
     */
    public function edit(Court $court)
    {
        return view('courts.edit', compact('court'));
    }

    /**
     * Update the specified court in database.
     */
    public function update(Request $request, Court $court)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|in:badminton,futsal',
            'price_per_hour' => 'required|numeric|min::0',
        ]);

        $court->update($validated);
        return redirect()->route('courts.index')->with('success', 'Court updated successfully');
    }

    /**
     * Remove the specified court from storage.
     */
    public function destroy(Court $court)
    {
        $court->delete();
        return redirect()->route('courts.index')->with('success', 'Court deleted successfully');
    }
}

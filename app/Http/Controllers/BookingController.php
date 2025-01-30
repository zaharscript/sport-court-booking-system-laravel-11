<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Court;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the bookings.
     */
    public function index()
    {
        $bookings = Booking::with('court', 'user')->get();
        return view('bookings.index', compact('bookings'));
    }

    /**
     * Show the form for creating a new bookings.
     */
    public function create()
    {
        $courts = Court::where('is_available', true)->get();
        return view('bookings.create', compact('courts'));
    }

    /**
     * Store a newly created bookings in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'court_id' => 'required|exists:courts,id',
            'date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        $court = Court::find($validated['court_id']);
        $hours = (strtotime($validated['end_time']) - strtotime($validated['start_time'])) / 3600;
        $totalAmount = $hours * $court->price_per_hour;

        Booking::create([
            'user_id' => Auth::id(),
            'court_id' => $validated['court_id'],
            'date' => $validated['date'],
            'start_time' => $validated['start_time'],
            'end_time' => $validated['end_time'],
            'total_amount' => $totalAmount,
            'status' => 'confirmed',
        ]);
        return redirect()->route('bookings.index')->with('success', 'Booking created successfully');
    }

    /**
     * Display the specified bookings.
     */
    public function show(Booking $booking)
    {
        return view('bookings.show', compact('booking'));
    }

    /**
     * Show the form for editing the specified bookings.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified bookings in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified bookings from storage.
     */
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Booking deleted successfully');
    }
}

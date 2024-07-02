<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'service' => 'required|string',
            'datetime' => 'required|date_format:Y-m-d\TH:i',
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservation.form')->with('success', 'Reservation successfully made!');
    }
}

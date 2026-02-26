<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'service_type' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        Booking::create($validated);

        return back()->with('success', 'Votre demande de rendez-vous a été envoyée avec succès ! Nous vous contacterons bientôt.');
    }
}

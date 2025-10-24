<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'registrationType' => 'required|in:student,professional,extra,abstract,attending',
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'affiliation' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'recept_payment' => 'required|string|max:255',
            'dietary' => 'nullable|string',
            'terms' => 'required|accepted',
        ]);

        // Map registration types to our system
        $typeMapping = [
            'student' => 'student',
            'professional' => 'academic',
            'extra' => 'academic',
            'abstract' => 'academic',
            'attending' => 'academic',
        ];

        $registrationType = $typeMapping[$request->registrationType] ?? 'academic';
        
        // Calculate registration fee based on type and early/late registration
        $fee = $this->calculateRegistrationFee($registrationType);
        
        // Create registration
        $registration = Registration::create([
            'user_id' => Auth::id(),
            'registration_type' => $registrationType,
            'full_name' => $request->fullName,
            'email' => $request->email,
            'affiliation' => $request->affiliation,
            'country' => $request->country,
            'phone' => null,
            'dietary_requirements' => $request->dietary,
            'special_requests' => null,
            'registration_fee' => $fee,
            'currency' => 'USD',
            'payment_status' => 'pending',
            'payment_method' => 'bank_transfer', // Default since no payment method field
            'transaction_id' => $request->recept_payment,
            'payment_notes' => 'Payment receipt uploaded via form',
            'receipt_file' => null, // No file upload in current form
        ]);

        return redirect()->route('author.dashboard')
            ->with('success', 'Registration submitted successfully! Your payment is under review.');
    }

    private function calculateRegistrationFee($type)
    {
        $isEarlyRegistration = now()->isBefore('2025-10-01');
        
        $fees = [
            'student' => $isEarlyRegistration ? 70 : 90,
            'academic' => $isEarlyRegistration ? 120 : 150,
            'industry' => $isEarlyRegistration ? 200 : 250,
        ];

        return $fees[$type] ?? 120; // Default to academic fee
    }
}

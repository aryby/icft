<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::with(['user', 'verifiedBy'])->latest()->paginate(10);
        return view('admin.registrations.index', compact('registrations'));
    }

    public function show(Registration $registration)
    {
        $registration->load(['user', 'verifiedBy']);
        return view('admin.registrations.show', compact('registration'));
    }

    public function verify(Request $request, Registration $registration)
    {
        $request->validate([
            'status' => 'required|in:verified,rejected',
            'notes' => 'nullable|string',
        ]);

        $registration->update([
            'payment_status' => $request->status,
            'payment_verified_at' => now(),
            'verified_by' => auth()->id(),
            'payment_notes' => $request->notes,
        ]);

        $status = $request->status === 'verified' ? 'verified' : 'rejected';
        
        return redirect()->route('admin.registrations.index')
            ->with('success', "Registration payment {$status} successfully.");
    }
}

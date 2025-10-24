<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Paper;
use App\Models\Review;
use App\Models\Registration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function index()
    {
        $stats = [
            'total_papers' => Paper::count(),
            'total_users' => User::count(),
            'total_registrations' => Registration::count(),
            'pending_reviews' => Review::where('status', 'pending')->count(),
            'accepted_papers' => Paper::where('status', 'accepted')->count(),
            'pending_registrations' => Registration::where('payment_status', 'pending')->count(),
            'verified_registrations' => Registration::where('payment_status', 'verified')->count(),
            'recent_papers' => Paper::latest()->take(5)->get(),
            'recent_users' => User::latest()->take(5)->get(),
            'recent_registrations' => Registration::latest()->take(5)->get(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}

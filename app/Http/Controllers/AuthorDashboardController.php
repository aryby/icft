<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthorDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $registration = $user->registration;
        $papers = $user->papers()->latest()->get();
        
        $stats = [
            'total_papers' => $papers->count(),
            'submitted_papers' => $papers->where('status', 'submitted')->count(),
            'under_review' => $papers->where('status', 'under_review')->count(),
            'accepted_papers' => $papers->where('status', 'accepted')->count(),
            'rejected_papers' => $papers->where('status', 'rejected')->count(),
        ];

        return view('author.dashboard', compact('registration', 'papers', 'stats'));
    }

    public function showPaper(Paper $paper)
    {
        // Ensure the paper belongs to the authenticated user
        if ($paper->user_id !== Auth::id()) {
            abort(403, 'Unauthorized access to paper.');
        }

        return view('author.papers.show', compact('paper'));
    }

    public function createPaper()
    {
        // Check if user has verified registration
        if (!Auth::user()->hasVerifiedRegistration()) {
            return redirect()->route('author.dashboard')
                ->with('error', 'You must have a verified registration to submit papers.');
        }

        return view('author.papers.create');
    }

    public function storePaper(Request $request)
    {
        // Check if user has verified registration
        if (!Auth::user()->hasVerifiedRegistration()) {
            return redirect()->route('author.dashboard')
                ->with('error', 'You must have a verified registration to submit papers.');
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
            'author_email' => 'required|email|max:255',
            'abstract' => 'required|string',
            'keywords' => 'required|string',
            'paper_file' => 'required|file|mimes:pdf|max:10240', // 10MB max
        ]);

        // Handle file upload
        $paperPath = null;
        if ($request->hasFile('paper_file')) {
            $paperPath = $request->file('paper_file')->store('papers', 'public');
        }

        Paper::create([
            'user_id' => Auth::id(),
            'title' => $request->title,
            'author_name' => $request->author_name,
            'author_email' => $request->author_email,
            'abstract' => $request->abstract,
            'keywords' => $request->keywords,
            'status' => 'under_review', // Default status
            'paper_file' => $paperPath,
        ]);

        return redirect()->route('author.dashboard')
            ->with('success', 'Paper submitted successfully! It is now under review.');
    }
}

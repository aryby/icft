<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paper;
use Illuminate\Http\Request;

class PaperController extends Controller
{
    /**
     * Display a listing of papers.
     */
    public function index()
    {
        $papers = Paper::with('user')->latest()->paginate(10);
        return view('admin.papers.index', compact('papers'));
    }

    /**
     * Show the form for creating a new paper.
     */
    public function create()
    {
        return view('admin.papers.create');
    }

    /**
     * Store a newly created paper.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
            'author_email' => 'required|email|max:255',
            'abstract' => 'required|string',
            'keywords' => 'required|string',
            'status' => 'required|in:pending,under_review,accepted,rejected',
        ]);

        Paper::create($request->all());

        return redirect()->route('admin.papers.index')
            ->with('success', 'Paper created successfully.');
    }

    /**
     * Display the specified paper.
     */
    public function show(Paper $paper)
    {
        $paper->load('reviews.reviewer');
        return view('admin.papers.show', compact('paper'));
    }

    /**
     * Show the form for editing the specified paper.
     */
    public function edit(Paper $paper)
    {
        return view('admin.papers.edit', compact('paper'));
    }

    /**
     * Update the specified paper.
     */
    public function update(Request $request, Paper $paper)
    {


        $rules = [
            'status' => 'required|in:pending,under_review,accepted,rejected',
        ];

        // If the request contains more than just status (e.g., from an edit form),
        // apply full validation rules.
        if ($request->has('title') || $request->has('author_name') || $request->has('abstract')) {
            $rules = array_merge($rules, [
                'title' => 'required|string|max:255',
                'author_name' => 'required|string|max:255',
                'author_email' => 'required|email|max:255',
                'abstract' => 'required|string',
                'keywords' => 'required|string',
                'track' => 'required|in:main-track,workshop-track,special-session-track',
            ]);
        }

        $request->validate($rules);
        // Only update the status if it's present in the request
        if ($request->has('status')) {
            $paper->status = $request->input('status');
            // Set reviewed_at or accepted_at based on status change
            // Always update timestamps when status is explicitly set
            if ($request->input('status') == 'accepted') {
                $paper->accepted_at = now();
                $paper->reviewed_at = now(); // Assuming review is complete if accepted
            } elseif ($request->input('status') == 'rejected') {
                $paper->reviewed_at = now();
                $paper->accepted_at = null;
            } elseif ($request->input('status') == 'under_review') {
                $paper->reviewed_at = now();
                $paper->accepted_at = null;
            } else {
                $paper->reviewed_at = null;
                $paper->accepted_at = null;
            }
        }

        // If other fields are present (from a full edit form), update them as well
        if ($request->has('title') || $request->has('author_name') || $request->has('abstract')) {
            $paper->update($request->only(['title', 'author_name', 'author_email', 'abstract', 'keywords', 'track']));
        }

        $paper->save();

        return redirect()->route('admin.papers.show', $paper)
            ->with('success', 'Paper updated successfully.');
    }

    /**
     * Remove the specified paper.
     */
    public function destroy(Paper $paper)
    {
        $paper->delete();

        return redirect()->route('admin.papers.index')
            ->with('success', 'Paper deleted successfully.');
    }
}

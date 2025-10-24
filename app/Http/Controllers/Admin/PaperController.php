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
            'status' => 'required|in:pending,accepted,rejected',
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
        $request->validate([
            'title' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
            'author_email' => 'required|email|max:255',
            'abstract' => 'required|string',
            'keywords' => 'required|string',
            'status' => 'required|in:pending,accepted,rejected',
        ]);

        $paper->update($request->all());

        return redirect()->route('admin.papers.index')
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

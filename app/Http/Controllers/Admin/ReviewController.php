<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Paper;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request, Paper $paper)
    {
        $request->validate([
            'score' => 'nullable|integer|min:1|max:5',
            'comments' => 'nullable|string',
            'recommendation' => 'nullable|in:accept,reject,minor_revision,major_revision',
        ]);

        $review = new Review();
        $review->paper_id = $paper->id;
        $review->reviewer_id = Auth::id();
        $review->score = $request->score;
        $review->comments = $request->comments;
        $review->recommendation = $request->recommendation;
        $review->submitted_at = now();
        $review->save();

        return redirect()->route('admin.papers.show', $paper)
            ->with('success', 'Review submitted successfully.');
    }
}

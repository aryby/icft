<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'paper_id',
        'reviewer_id',
        'score',
        'comments',
        'recommendation',
        'submitted_at',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
    ];

    /**
     * Get the paper that owns the review.
     */
    public function paper()
    {
        return $this->belongsTo(Paper::class);
    }

    /**
     * Get the reviewer that owns the review.
     */
    public function reviewer()
    {
        return $this->belongsTo(User::class, 'reviewer_id');
    }

    /**
     * Scope a query to only include accepted recommendations.
     */
    public function scopeAccepted($query)
    {
        return $query->where('recommendation', 'accept');
    }

    /**
     * Scope a query to only include rejected recommendations.
     */
    public function scopeRejected($query)
    {
        return $query->where('recommendation', 'reject');
    }
}

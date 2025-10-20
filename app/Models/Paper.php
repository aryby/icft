<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'abstract',
        'keywords',
        'track',
        'status',
        'author_id',
        'file_path',
        'submitted_at',
        'reviewed_at',
        'accepted_at',
    ];

    protected $casts = [
        'submitted_at' => 'datetime',
        'reviewed_at' => 'datetime',
        'accepted_at' => 'datetime',
    ];

    /**
     * Get the author that owns the paper.
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Get the reviews for the paper.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    /**
     * Scope a query to only include accepted papers.
     */
    public function scopeAccepted($query)
    {
        return $query->where('status', 'accepted');
    }

    /**
     * Scope a query to only include pending papers.
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
}

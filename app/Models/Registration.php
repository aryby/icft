<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Registration extends Model
{
    protected $fillable = [
        'user_id',
        'registration_type',
        'full_name',
        'email',
        'affiliation',
        'country',
        'phone',
        'dietary_requirements',
        'special_requests',
        'registration_fee',
        'currency',
        'payment_status',
        'payment_method',
        'transaction_id',
        'payment_notes',
        'receipt_file',
        'payment_verified_at',
        'verified_by',
    ];

    protected $casts = [
        'registration_fee' => 'decimal:2',
        'payment_verified_at' => 'datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function verifiedBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'verified_by');
    }

    public function isPaid(): bool
    {
        return in_array($this->payment_status, ['paid', 'verified']);
    }

    public function isVerified(): bool
    {
        return $this->payment_status === 'verified';
    }

    public function isPending(): bool
    {
        return $this->payment_status === 'pending';
    }
}

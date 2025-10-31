@extends('layouts.admin')

@section('title', 'Verify Registration Payment - Admin')
@section('page_title', 'Verify Registration Payment')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="table-card">
                <div class="table-header">
                    <h5 class="mb-0">Payment Verification</h5>
                    <a href="{{ route('admin.registrations.show', $registration) }}" class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-arrow-left me-1"></i>Back to Registration
                    </a>
                </div>
                
                <div class="p-4">
                    <!-- Registration Summary -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h6 class="text-muted mb-3">Registration Details</h6>
                            <table class="table table-borderless">
                                <tr>
                                    <td class="fw-bold">Name:</td>
                                    <td>{{ $registration->full_name }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Email:</td>
                                    <td>{{ $registration->email }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Type:</td>
                                    <td>
                                        <span class="badge bg-info text-capitalize">
                                            {{ $registration->registration_type }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Affiliation:</td>
                                    <td>{{ $registration->affiliation }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Country:</td>
                                    <td>{{ $registration->country }}</td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="col-md-6">
                            <h6 class="text-muted mb-3">Payment Information</h6>
                            <table class="table table-borderless">
                                <tr>
                                    <td class="fw-bold">Registration Fee:</td>
                                    <td class="h5 text-success">${{ number_format($registration->registration_fee, 2) }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Payment Method:</td>
                                    <td class="text-capitalize">{{ str_replace('_', ' ', $registration->payment_method) }}</td>
                                </tr>
                                @if($registration->transaction_id)
                                    <tr>
                                        <td class="fw-bold">Transaction ID:</td>
                                        <td><code>{{ $registration->transaction_id }}</code></td>
                                    </tr>
                                @endif
                                <tr>
                                    <td class="fw-bold">Current Status:</td>
                                    <td>
                                        @if($registration->payment_status === 'pending')
                                            <span class="badge bg-warning">Pending</span>
                                        @elseif($registration->payment_status === 'verified')
                                            <span class="badge bg-success">Verified</span>
                                        @elseif($registration->payment_status === 'rejected')
                                            <span class="badge bg-danger">Rejected</span>
                                        @else
                                            <span class="badge bg-secondary">{{ ucfirst($registration->payment_status) }}</span>
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    @if($registration->payment_status === 'pending')
                        <!-- Verification Form -->
                        <div class="border-top pt-4">
                            <h6 class="text-muted mb-3">Payment Verification</h6>
                            
                            <form method="POST" action="{{ route('admin.registrations.verify.post', $registration) }}">
                                @csrf
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Verification Status</label>
                                            <select class="form-select" id="status" name="status" required>
                                                <option value="">Select Status</option>
                                                <option value="verified">✓ Verify Payment</option>
                                                <option value="rejected">✗ Reject Payment</option>
                                            </select>
                                            @error('status')
                                                <div class="text-danger small">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="notes" class="form-label">Verification Notes</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="4" 
                                              placeholder="Add any notes about this verification..."></textarea>
                                    <div class="form-text">Optional: Add notes about the verification decision.</div>
                                    @error('notes')
                                        <div class="text-danger small">{{ $message }}</div>
                                    @enderror
                                </div>
                                
                                <div class="d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-check me-1"></i>Submit Verification
                                    </button>
                                    <a href="{{ route('admin.registrations.show', $registration) }}" class="btn btn-secondary">
                                        <i class="fas fa-times me-1"></i>Cancel
                                    </a>
                                </div>
                            </form>
                        </div>
                    @else
                        <!-- Already Verified -->
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            This registration has already been verified.
                            @if($registration->payment_verified_at)
                                <br><strong>Verified on:</strong> {{ $registration->payment_verified_at->format('M d, Y H:i') }}
                            @endif
                            @if($registration->verifiedBy)
                                <br><strong>Verified by:</strong> {{ $registration->verifiedBy->name }}
                            @endif
                            @if($registration->payment_notes)
                                <br><strong>Notes:</strong> {{ $registration->payment_notes }}
                            @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        // Auto-focus on status select when page loads
        document.addEventListener('DOMContentLoaded', function() {
            const statusSelect = document.getElementById('status');
            if (statusSelect) {
                statusSelect.focus();
            }
        });
    </script>
@endsection

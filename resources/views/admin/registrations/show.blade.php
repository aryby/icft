@extends('layouts.admin')

@section('title', 'Registration Details - Admin')
@section('page_title', 'Registration Details')


@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="table-card">
                <div class="table-header">
                    <h5 class="mb-0">Registration Information</h5>
                    <div>
                        @if($registration->payment_status === 'pending')
                            <a href="{{ route('admin.registrations.verify', $registration) }}" 
                               class="btn btn-success btn-sm me-2">
                                <i class="fas fa-check me-1"></i>Verify Payment
                            </a>
                        @endif
                        <a href="{{ route('admin.registrations.index') }}" class="btn btn-outline-secondary btn-sm">
                            <i class="fas fa-arrow-left me-1"></i>Back to List
                        </a>
                    </div>
                </div>
                
                <div class="p-4">
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-muted mb-3">Personal Information</h6>
                            <table class="table table-borderless">
                                <tr>
                                    <td class="fw-bold">Full Name:</td>
                                    <td>{{ $registration->full_name }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Email:</td>
                                    <td>{{ $registration->email }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Phone:</td>
                                    <td>{{ $registration->phone ?? 'Not provided' }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Country:</td>
                                    <td>{{ $registration->country }}</td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="col-md-6">
                            <h6 class="text-muted mb-3">Registration Details</h6>
                            <table class="table table-borderless">
                                <tr>
                                    <td class="fw-bold">Registration Type:</td>
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
                                    <td class="fw-bold">Registration Date:</td>
                                    <td>{{ $registration->created_at->format('M d, Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <td class="fw-bold">Status:</td>
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
                    
                    @if($registration->dietary_requirements)
                        <div class="row mt-4">
                            <div class="col-12">
                                <h6 class="text-muted mb-3">Special Requirements</h6>
                                <p><strong>Dietary Requirements:</strong> {{ $registration->dietary_requirements }}</p>
                                @if($registration->special_requests)
                                    <p><strong>Special Requests:</strong> {{ $registration->special_requests }}</p>
                                @endif
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="table-card">
                <div class="table-header">
                    <h5 class="mb-0">Payment Information</h5>
                </div>
                
                <div class="p-4">
                    <table class="table table-borderless">
                        <tr>
                            <td class="fw-bold">Registration Fee:</td>
                            <td class="h5 text-success">${{ number_format($registration->registration_fee, 2) }}</td>
                        </tr>
                        <tr>
                            <td class="fw-bold">Currency:</td>
                            <td>{{ strtoupper($registration->currency) }}</td>
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
                        @if($registration->payment_verified_at)
                            <tr>
                                <td class="fw-bold">Verified At:</td>
                                <td>{{ $registration->payment_verified_at->format('M d, Y H:i') }}</td>
                            </tr>
                        @endif
                        @if($registration->verifiedBy)
                            <tr>
                                <td class="fw-bold">Verified By:</td>
                                <td>{{ $registration->verifiedBy->name }}</td>
                            </tr>
                        @endif
                        @if($registration->payment_notes)
                            <tr>
                                <td class="fw-bold">Notes:</td>
                                <td>{{ $registration->payment_notes }}</td>
                            </tr>
                        @endif
                    </table>
                </div>
            </div>
            
            @if($registration->user)
                <div class="table-card mt-3">
                    <div class="table-header">
                        <h5 class="mb-0">User Account</h5>
                    </div>
                    
                    <div class="p-4">
                        <table class="table table-borderless">
                            <tr>
                                <td class="fw-bold">Account Status:</td>
                                <td>
                                    @if($registration->user->isActive())
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        <span class="badge bg-warning">Inactive</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">User Role:</td>
                                <td>
                                    <span class="badge bg-info text-capitalize">
                                        {{ $registration->user->role }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fw-bold">Account Created:</td>
                                <td>{{ $registration->user->created_at->format('M d, Y') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>



@endsection

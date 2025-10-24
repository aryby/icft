@extends('layouts.author')

@section('title', 'Author Dashboard - ICFT 2025')
@section('page_title', 'Dashboard')

@section('content')
@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif

<!-- Registration Status -->
@if($registration)
    <div class="table-card mb-4">
        <div class="table-header">
            <h5 class="mb-0">Registration Status</h5>
            <span class="status-badge status-{{ $registration->payment_status }}">
                {{ ucfirst(str_replace('_', ' ', $registration->payment_status)) }}
            </span>
        </div>
        <div class="p-3">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Registration Type:</strong> {{ ucfirst($registration->registration_type) }}</p>
                    <p><strong>Full Name:</strong> {{ $registration->full_name }}</p>
                    <p><strong>Email:</strong> {{ $registration->email }}</p>
                    <p><strong>Affiliation:</strong> {{ $registration->affiliation }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Country:</strong> {{ $registration->country }}</p>
                    <p><strong>Registration Fee:</strong> ${{ $registration->registration_fee }} {{ $registration->currency }}</p>
                    <p><strong>Payment Method:</strong> {{ ucfirst(str_replace('_', ' ', $registration->payment_method)) }}</p>
                    <p><strong>Transaction ID:</strong> {{ $registration->transaction_id }}</p>
                </div>
            </div>
            @if($registration->payment_notes)
                <div class="mt-3">
                    <strong>Payment Notes:</strong>
                    <p class="text-muted">{{ $registration->payment_notes }}</p>
                </div>
            @endif
        </div>
    </div>
@else
    <div class="alert alert-warning" role="alert">
        <h5 class="alert-heading">Registration Required</h5>
        <p>You need to complete your registration before you can submit papers.</p>
        <hr>
        <a href="{{ route('registration') }}" class="btn btn-warning">
            <i class="fas fa-user-plus me-1"></i>Complete Registration
        </a>
    </div>
@endif

<!-- Statistics -->
<div class="row mb-4">
    <div class="col-md-3 mb-3">
        <div class="stats-card">
            <div class="stats-number text-primary">{{ $stats['total_papers'] }}</div>
            <div class="stats-label">Total Papers</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stats-card">
            <div class="stats-number text-info">{{ $stats['under_review'] }}</div>
            <div class="stats-label">Under Review</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stats-card">
            <div class="stats-number text-success">{{ $stats['accepted_papers'] }}</div>
            <div class="stats-label">Accepted</div>
        </div>
    </div>
    <div class="col-md-3 mb-3">
        <div class="stats-card">
            <div class="stats-number text-danger">{{ $stats['rejected_papers'] }}</div>
            <div class="stats-label">Rejected</div>
        </div>
    </div>
</div>

<!-- Recent Papers -->
<div class="table-card">
    <div class="table-header">
        <h5 class="mb-0">My Papers</h5>
        @if($registration && $registration->isVerified())
            <a href="{{ route('author.papers.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i>Submit New Paper
            </a>
        @else
            <button class="btn btn-secondary" disabled>
                <i class="fas fa-lock me-1"></i>Registration Required
            </button>
        @endif
    </div>
    
    @if($papers->count() > 0)
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Submitted</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($papers as $paper)
                        <tr>
                            <td>
                                <div class="fw-bold">{{ Str::limit($paper->title, 50) }}</div>
                                <small class="text-muted">by {{ $paper->author_name }}</small>
                            </td>
                            <td>
                                <span class="status-badge status-{{ str_replace('_', '-', $paper->status) }}">
                                    {{ ucfirst(str_replace('_', ' ', $paper->status)) }}
                                </span>
                            </td>
                            <td>
                                <small class="text-muted">{{ $paper->created_at->format('M d, Y') }}</small>
                            </td>
                            <td>
                                <a href="{{ route('author.papers.show', $paper) }}" class="btn btn-outline-primary btn-sm">
                                    <i class="fas fa-eye me-1"></i>View
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="text-center p-5">
            <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
            <h5 class="text-muted">No papers submitted yet</h5>
            <p class="text-muted mb-3">
                @if($registration && $registration->isVerified())
                    Submit your first paper to get started.
                @else
                    Complete your registration to submit papers.
                @endif
            </p>
            @if($registration && $registration->isVerified())
                <a href="{{ route('author.papers.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i>Submit Paper
                </a>
            @else
                <a href="{{ route('registration') }}" class="btn btn-warning">
                    <i class="fas fa-user-plus me-1"></i>Complete Registration
                </a>
            @endif
        </div>
    @endif
</div>

<!-- Quick Actions -->
@if($registration && $registration->isVerified())
    <div class="table-card">
        <div class="table-header">
            <h5 class="mb-0">Quick Actions</h5>
        </div>
        <div class="p-3">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <a href="{{ route('author.papers.create') }}" class="btn btn-outline-primary w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4 text-decoration-none">
                        <i class="fas fa-plus-circle fa-2x mb-2"></i>
                        <div class="fw-bold">Submit Paper</div>
                        <small class="text-muted">Submit a new paper</small>
                    </a>
                </div>
                
                <div class="col-md-4 mb-3">
                    <a href="{{ route('author.papers.index') }}" class="btn btn-outline-info w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4 text-decoration-none">
                        <i class="fas fa-file-alt fa-2x mb-2"></i>
                        <div class="fw-bold">My Papers</div>
                        <small class="text-muted">View all your papers</small>
                    </a>
                </div>
                
                <div class="col-md-4 mb-3">
                    <a href="{{ route('registration') }}" class="btn btn-outline-success w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4 text-decoration-none">
                        <i class="fas fa-user-check fa-2x mb-2"></i>
                        <div class="fw-bold">Registration</div>
                        <small class="text-muted">View registration details</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endif
@endsection

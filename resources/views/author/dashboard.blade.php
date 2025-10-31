@extends('layouts.author')

@section('title', 'Author Dashboard - DESDI 2026')
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

<!-- Account Status Alert -->
@if(!Auth::user()->isActive())
<div class="alert alert-warning" role="alert">
    <h5 class="alert-heading">
        <i class="fas fa-exclamation-triangle me-2"></i>Account Under Review
    </h5>
    <p class="mb-0">Your account is currently inactive and under review. You will be able to submit new papers and access full author features once an administrator activates your account.</p>
</div>
@endif

<!-- Recent Papers -->
<div class="table-card">
    <div class="table-header">
        <h5 class="mb-0">My Papers</h5>
        @if(Auth::user()->isActive())
            <a href="{{ route('author.papers.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i>Submit New Paper
            </a>
        @else
            <button class="btn btn-secondary" disabled title="Account must be active to submit papers">
                <i class="fas fa-plus me-1"></i>Submit New Paper
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
                        <th>Track</th>
                        <th>Submitted</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($papers as $paper)
                        <tr>
                            <td>
                                <div class="fw-bold">{{ Str::limit($paper->title, 50) }}</div>
                                <small class="text-muted">{{ $paper->submission_option === 'full_submission' ? 'Full Paper' : 'Abstract Only' }}</small>
                            </td>
                            <td>
                                <span class="status-badge status-{{ str_replace('_', '-', $paper->status) }}">
                                    {{ ucfirst(str_replace('_', ' ', $paper->status)) }}
                                </span>
                            </td>
                            <td>
                                <small class="text-muted">{{ ucfirst(str_replace('-', ' ', $paper->track)) }}</small>
                            </td>
                            <td>
                                <small class="text-muted">{{ $paper->submitted_at ? $paper->submitted_at->format('M d, Y') : $paper->created_at->format('M d, Y') }}</small>
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
            <p class="lead">No papers submitted yet.</p>
            @if(Auth::user()->isActive())
                <p class="text-muted mb-3">Start by submitting your first paper!</p>
                <a href="{{ route('author.papers.create') }}" class="btn btn-primary mt-3">Submit New Paper</a>
            @else
                <p class="text-muted mb-3">You can submit papers once your account is activated.</p>
                <button class="btn btn-secondary mt-3" disabled>Submit New Paper</button>
            @endif
        </div>
    @endif
</div>

<!-- Quick Actions -->
<div class="table-card">
    <div class="table-header">
        <h5 class="mb-0">Quick Actions</h5>
    </div>
    <div class="p-3">
        <div class="row">
            <div class="col-md-6 mb-3">
                @if(Auth::user()->isActive())
                    <a href="{{ route('author.papers.create') }}" class="btn btn-outline-primary w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4 text-decoration-none">
                        <i class="fas fa-plus-circle fa-2x mb-2"></i>
                        <div class="fw-bold">Submit Paper</div>
                        <small class="text-muted">Submit a new paper</small>
                    </a>
                @else
                    <button class="btn btn-outline-secondary w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4" disabled>
                        <i class="fas fa-plus-circle fa-2x mb-2"></i>
                        <div class="fw-bold">Submit Paper</div>
                        <small class="text-muted">Account must be active</small>
                    </button>
                @endif
            </div>
            
            <div class="col-md-6 mb-3">
                <a href="{{ route('author.papers.index') }}" class="btn btn-outline-info w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4 text-decoration-none">
                    <i class="fas fa-file-alt fa-2x mb-2"></i>
                    <div class="fw-bold">My Papers</div>
                    <small class="text-muted">View all your papers</small>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

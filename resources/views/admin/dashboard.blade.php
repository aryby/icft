@extends('layouts.admin')

@section('title', 'Admin Dashboard - DESDI 2026')
@section('page_title', 'Dashboard')

@section('content')
<div class="row mb-4">
    <div class="col-md-2 mb-3">
        <div class="stats-card">
            <div class="stats-number text-primary">{{ $stats['total_papers'] }}</div>
            <div class="stats-label">Total Papers</div>
        </div>
    </div>
    <div class="col-md-2 mb-3">
        <div class="stats-card">
            <div class="stats-number text-success">{{ $stats['total_users'] }}</div>
            <div class="stats-label">Registered Users</div>
        </div>
    </div>
    <div class="col-md-2 mb-3">
        <div class="stats-card">
            <div class="stats-number text-info">{{ $stats['total_registrations'] }}</div>
            <div class="stats-label">Total Registrations</div>
        </div>
    </div>
    <div class="col-md-2 mb-3">
        <div class="stats-card">
            <div class="stats-number text-warning">{{ $stats['pending_registrations'] }}</div>
            <div class="stats-label">Pending Payments</div>
        </div>
    </div>
    <div class="col-md-2 mb-3">
        <div class="stats-card">
            <div class="stats-number text-success">{{ $stats['verified_registrations'] }}</div>
            <div class="stats-label">Verified Payments</div>
        </div>
    </div>
    <div class="col-md-2 mb-3">
        <div class="stats-card">
            <div class="stats-number text-danger">{{ $stats['accepted_papers'] }}</div>
            <div class="stats-label">Accepted Papers</div>
        </div>
    </div>
</div>

<div class="row mb-4">
    <!-- Recent Papers -->
    <div class="col-lg-6 mb-4">
        <div class="table-card">
            <div class="table-header">
                <h5 class="mb-0">Recent Papers</h5>
            </div>
            <div class="p-3">
                @if($stats['recent_papers']->count() > 0)
                    <div class="list-group list-group-flush">
                        @foreach($stats['recent_papers'] as $paper)
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fw-bold">{{ Str::limit($paper->title, 40) }}</div>
                                    <small class="text-muted">{{ $paper->author_name }}</small>
                                </div>
                                <span class="badge 
                                    @if($paper->status == 'accepted') bg-success
                                    @elseif($paper->status == 'rejected') bg-danger
                                    @else bg-warning @endif">
                                    {{ ucfirst($paper->status) }}
                                </span>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted mb-0">No papers submitted yet.</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Recent Users -->
    <div class="col-lg-6 mb-4">
        <div class="table-card">
            <div class="table-header">
                <h5 class="mb-0">Recent Users</h5>
            </div>
            <div class="p-3">
                @if($stats['recent_users']->count() > 0)
                    <div class="list-group list-group-flush">
                        @foreach($stats['recent_users'] as $user)
                            <div class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="fw-bold">{{ $user->name }}</div>
                                    <small class="text-muted">{{ $user->email }}</small>
                                </div>
                                <small class="text-muted">
                                    {{ $user->created_at->diffForHumans() }}
                                </small>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted mb-0">No users registered yet.</p>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="table-card">
    <div class="table-header">
        <h5 class="mb-0">Quick Actions</h5>
    </div>
    <div class="p-3">
        <div class="row">
            <div class="col-md-4 mb-3">
                <a href="{{ route('admin.papers.create') }}" class="btn btn-outline-primary w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4 text-decoration-none">
                    <i class="fas fa-plus-circle fa-2x mb-2"></i>
                    <div class="fw-bold">Add New Paper</div>
                    <small class="text-muted">Create a new paper entry</small>
                </a>
            </div>
            
            <div class="col-md-4 mb-3">
                <a href="{{ route('admin.users.create') }}" class="btn btn-outline-success w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4 text-decoration-none">
                    <i class="fas fa-user-plus fa-2x mb-2"></i>
                    <div class="fw-bold">Add New User</div>
                    <small class="text-muted">Register a new user</small>
                </a>
            </div>
            
            <div class="col-md-4 mb-3">
                <a href="{{ route('admin.papers.index') }}" class="btn btn-outline-info w-100 h-100 d-flex flex-column align-items-center justify-content-center p-4 text-decoration-none">
                    <i class="fas fa-file-alt fa-2x mb-2"></i>
                    <div class="fw-bold">Manage Papers</div>
                    <small class="text-muted">View and edit papers</small>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

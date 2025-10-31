@extends('layouts.author')

@section('title', 'My Papers - DESDI 2026')
@section('page_title', 'My Papers')

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

    <div class="table-card">
        <div class="table-header">
            <h5 class="mb-0">All My Papers</h5>
            <a href="{{ route('author.papers.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i>Submit New Paper
            </a>
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
                    Submit your first paper to get started.
                </p>
                <a href="{{ route('author.papers.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i>Submit Paper
                </a>
            </div>
        @endif
    </div>
@endsection
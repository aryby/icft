@extends('layouts.author')

@section('title', 'Paper Details - ICFT 2025')
@section('page_title', 'Paper Details')

@section('content')
<div class="table-card">
    <div class="table-header">
        <h5 class="mb-0">{{ $paper->title }}</h5>
        <span class="status-badge status-{{ str_replace('_', '-', $paper->status) }}">
            {{ ucfirst(str_replace('_', ' ', $paper->status)) }}
        </span>
    </div>
    
    <div class="p-4">
        <div class="row">
            <div class="col-md-8">
                <div class="mb-4">
                    <h6>Author Information</h6>
                    <p><strong>Name:</strong> {{ $paper->author_name }}</p>
                    <p><strong>Email:</strong> {{ $paper->author_email }}</p>
                </div>

                <div class="mb-4">
                    <h6>Abstract</h6>
                    <p class="text-muted">{{ $paper->abstract }}</p>
                </div>

                <div class="mb-4">
                    <h6>Keywords</h6>
                    <p class="text-muted">{{ $paper->keywords }}</p>
                </div>

                @if($paper->paper_file)
                    <div class="mb-4">
                        <h6>Paper File</h6>
                        <a href="{{ Storage::url($paper->paper_file) }}" target="_blank" class="btn btn-outline-primary">
                            <i class="fas fa-download me-1"></i>Download Paper
                        </a>
                    </div>
                @endif
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h6 class="mb-0">Submission Details</h6>
                    </div>
                    <div class="card-body">
                        <p><strong>Submitted:</strong> {{ $paper->created_at->format('M d, Y H:i') }}</p>
                        <p><strong>Status:</strong> 
                            <span class="status-badge status-{{ str_replace('_', '-', $paper->status) }}">
                                {{ ucfirst(str_replace('_', ' ', $paper->status)) }}
                            </span>
                        </p>
                        
                        @if($paper->reviewed_at)
                            <p><strong>Reviewed:</strong> {{ $paper->reviewed_at->format('M d, Y H:i') }}</p>
                        @endif
                        
                        @if($paper->accepted_at)
                            <p><strong>Accepted:</strong> {{ $paper->accepted_at->format('M d, Y H:i') }}</p>
                        @endif
                    </div>
                </div>

                @if($paper->reviews()->count() > 0)
                    <div class="card mt-3">
                        <div class="card-header">
                            <h6 class="mb-0">Reviews</h6>
                        </div>
                        <div class="card-body">
                            @foreach($paper->reviews as $review)
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <strong>Reviewer {{ $loop->iteration }}</strong>
                                        <span class="status-badge status-{{ str_replace('_', '-', $review->status) }}">
                                            {{ ucfirst(str_replace('_', ' ', $review->status)) }}
                                        </span>
                                    </div>
                                    @if($review->comments)
                                        <p class="text-muted small mt-2">{{ $review->comments }}</p>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('author.dashboard') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-1"></i>Back to Dashboard
            </a>
            <a href="{{ route('author.papers.create') }}" class="btn btn-primary">
                <i class="fas fa-plus me-1"></i>Submit Another Paper
            </a>
        </div>
    </div>
</div>
@endsection

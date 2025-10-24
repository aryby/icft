@extends('layouts.admin')

@section('title', $paper->title . ' - Admin')
@section('page_title', 'Paper Details')

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

    <div class="table-card mb-4">
        <div class="table-header">
            <h5 class="mb-0">Paper: {{ $paper->title }}</h5>
            <a href="{{ route('admin.papers.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-1"></i>Back to Papers
            </a>
        </div>
        <div class="p-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Author Name:</strong> {{ $paper->author->name ?? 'N/A' }}</p>
                    <p><strong>Author Email:</strong> {{ $paper->author->email ?? 'N/A' }}</p>
                    <p><strong>Conference Track:</strong> {{ ucfirst(str_replace('-', ' ', $paper->track)) }}</p>
                    <p><strong>Status:</strong> 
                        <span class="badge 
                            @if($paper->status == 'accepted') bg-success
                            @elseif($paper->status == 'rejected') bg-danger
                            @else bg-warning @endif">
                            {{ ucfirst($paper->status) }}
                        </span>
                    </p>
                </div>
                <div class="col-md-6">
                    <p><strong>Submitted On:</strong> {{ $paper->created_at ? $paper->created_at->format('M d, Y H:i') : 'N/A' }}</p>
                    @if($paper->reviewed_at)
                        <p><strong>Reviewed On:</strong> {{ $paper->reviewed_at->format('M d, Y H:i') }}</p>
                    @else
                        <p><strong>Reviewed On:</strong> N/A</p>
                    @endif
                    @if($paper->accepted_at)
                        <p><strong>Accepted On:</strong> {{ $paper->accepted_at->format('M d, Y H:i') }}</p>
                    @else
                        <p><strong>Accepted On:</strong> N/A</p>
                    @endif
                    <p><strong>File:</strong> 
                        @if($paper->file_path)
                            <a href="{{ Storage::url($paper->file_path) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                <i class="fas fa-download me-1"></i>Download Paper
                            </a>
                        @else
                            N/A
                        @endif
                    </p>
                </div>
            </div>

            <h6 class="mt-4">Abstract</h6>
            <p>{{ $paper->abstract }}</p>

            <h6 class="mt-4">Keywords</h6>
            <p>{{ $paper->keywords }}</p>

            <h6 class="mt-4">Change Status</h6>
            <form action="{{ route('admin.papers.update', $paper->id) }}" method="POST" class="mb-4">
                @csrf
                @method('PUT')
                <div class="input-group">
                    <select class="form-select @error('status') is-invalid @enderror" name="status">
                        <option value="pending" {{ $paper->status == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="under_review" {{ $paper->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                        <option value="accepted" {{ $paper->status == 'accepted' ? 'selected' : '' }}>Accepted</option>
                        <option value="rejected" {{ $paper->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </div>
            </form>

            <h6 class="mt-4">Reviews</h6>
            @if($paper->reviews->count() > 0)
                @foreach($paper->reviews as $review)
                    <div class="card mb-3">
                        <div class="card-body">
                            <h7 class="card-title">Reviewer: {{ $review->reviewer->name ?? 'N/A' }}</h7>
                            <p class="card-text"><strong>Score:</strong> {{ $review->score ?? 'N/A' }}</p>
                            <p class="card-text"><strong>Recommendation:</strong> {{ ucfirst(str_replace('_', ' ', $review->recommendation ?? 'N/A')) }}</p>
                            <p class="card-text"><strong>Comments:</strong> {{ $review->comments ?? 'N/A' }}</p>
                            <small class="text-muted">Submitted on: {{ $review->created_at->format('M d, Y H:i') }}</small>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No reviews yet.</p>
            @endif

            <h6 class="mt-4">Add New Review</h6>
            <form action="{{ route('admin.reviews.store', $paper) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="score" class="form-label">Score (1-5)</label>
                    <input type="number" class="form-control @error('score') is-invalid @enderror" id="score" name="score" min="1" max="5" value="{{ old('score') }}">
                    @error('score')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="recommendation" class="form-label">Recommendation</label>
                    <select class="form-select @error('recommendation') is-invalid @enderror" id="recommendation" name="recommendation">
                        <option value="">Select Recommendation</option>
                        <option value="accept" {{ old('recommendation') == 'accept' ? 'selected' : '' }}>Accept</option>
                        <option value="reject" {{ old('recommendation') == 'reject' ? 'selected' : '' }}>Reject</option>
                        <option value="minor_revision" {{ old('recommendation') == 'minor_revision' ? 'selected' : '' }}>Minor Revision</option>
                        <option value="major_revision" {{ old('recommendation') == 'major_revision' ? 'selected' : '' }}>Major Revision</option>
                    </select>
                    @error('recommendation')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="comments" class="form-label">Comments</label>
                    <textarea class="form-control @error('comments') is-invalid @enderror" id="comments" name="comments" rows="5">{{ old('comments') }}</textarea>
                    @error('comments')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit Review</button>
            </form>
        </div>
    </div>
@endsection
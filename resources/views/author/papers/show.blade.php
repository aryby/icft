@extends('layouts.author')

@section('title', $paper->title . ' - DESDI 2026')
@section('page_title', 'Paper Details')

@section('content')
    <div class="table-card mb-4">
        <div class="table-header">
            <h5 class="mb-0">{{ $paper->title }}</h5>
            <a href="{{ route('author.papers.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-1"></i>Back to My Papers
            </a>
        </div>
        <div class="p-4">
            <div class="row mb-3">
                <div class="col-md-6">
                    <p><strong>Author Name:</strong> {{ $paper->author_name }}</p>
                    <p><strong>Author Email:</strong> {{ $paper->author_email }}</p>
                    <p><strong>Conference Track:</strong> {{ ucfirst(str_replace('-', ' ', $paper->track)) }}</p>
                    <p><strong>Status:</strong> 
                        <span class="status-badge status-{{ str_replace('_', '-', $paper->status) }}">
                            {{ ucfirst(str_replace('_', ' ', $paper->status)) }}
                        </span>
                    </p>
                </div>
                <div class="col-md-6">
                    <p><strong>Submitted On:</strong> {{ $paper->created_at->format('M d, Y H:i') }}</p>
                    @if($paper->reviewed_at)
                        <p><strong>Reviewed On:</strong> {{ $paper->reviewed_at->format('M d, Y H:i') }}</p>
                    @endif
                    @if($paper->accepted_at)
                        <p><strong>Accepted On:</strong> {{ $paper->accepted_at->format('M d, Y H:i') }}</p>
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

            {{-- Add review comments section if applicable --}}
             @if($paper->reviews->count() > 0)
                <h6 class="mt-4">Review Comments</h6>
                @foreach($paper->reviews as $review)
                    <div class="card mb-3">
                        <div class="card-body">
{{--                             <h7 class="card-title">Reviewer: {{ $review->reviewer->name ?? 'N/A' }}</h7>
 --}}                            <p class="card-text"><strong>Rating:</strong> {{ $review->score }}/5</p>
                            <p class="card-text"><strong>Comments:</strong> {{ $review->comments }}</p>
                            <p class="card-text"><strong>Recommendation:</strong> {{ $review->recommendation }}</p>
                            <small class="text-muted alert-info">Reviewed on: {{ $review->created_at->format('M d, Y') }}</small>
                        </div>
                    </div>
                @endforeach
            @endif

            <div class="mt-4 pt-3 border-top">
                <a href="{{ route('author.papers.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left me-1"></i>Back to My Papers
                </a>
                {{-- Add edit/delete buttons if needed --}}
                {{-- <a href="{{ route('author.papers.edit', $paper) }}" class="btn btn-warning">
                    <i class="fas fa-edit me-1"></i>Edit Paper
                </a>
                <form action="{{ route('author.papers.destroy', $paper) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this paper?')">
                        <i class="fas fa-trash me-1"></i>Delete Paper
                    </button>
                </form> --}}
            </div>
        </div>
    </div>
@endsection

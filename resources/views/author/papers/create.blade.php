@extends('layouts.author')

@section('title', 'Submit Paper - ICFT 2025')
@section('page_title', 'Submit Paper')

@section('content')
<div class="table-card">
    <div class="table-header">
        <h5 class="mb-0">Submit New Paper</h5>
        <a href="{{ route('author.dashboard') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-1"></i>Back to Dashboard
        </a>
    </div>
    
    <div class="p-4">
        <form method="POST" action="{{ route('author.papers.store') }}" enctype="multipart/form-data">
            @csrf
            
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="title" class="form-label">Paper Title <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" 
                               id="title" name="title" value="{{ old('title') }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author_name" class="form-label">Author Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('author_name') is-invalid @enderror" 
                               id="author_name" name="author_name" value="{{ old('author_name', Auth::user()->name) }}" required>
                        @error('author_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="author_email" class="form-label">Author Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control @error('author_email') is-invalid @enderror" 
                               id="author_email" name="author_email" value="{{ old('author_email', Auth::user()->email) }}" required>
                        @error('author_email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="abstract" class="form-label">Abstract <span class="text-danger">*</span></label>
                        <textarea class="form-control @error('abstract') is-invalid @enderror" 
                                  id="abstract" name="abstract" rows="6" required>{{ old('abstract') }}</textarea>
                        @error('abstract')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Please provide a comprehensive abstract of your paper (200-300 words).</div>
                    </div>

                    <div class="mb-3">
                        <label for="keywords" class="form-label">Keywords <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('keywords') is-invalid @enderror" 
                               id="keywords" name="keywords" value="{{ old('keywords') }}" 
                               placeholder="e.g., machine learning, artificial intelligence, data science" required>
                        @error('keywords')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Separate keywords with commas.</div>
                    </div>

                    <div class="mb-3">
                        <label for="paper_file" class="form-label">Paper File (PDF) <span class="text-danger">*</span></label>
                        <input type="file" class="form-control @error('paper_file') is-invalid @enderror" 
                               id="paper_file" name="paper_file" accept=".pdf" required>
                        @error('paper_file')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        <div class="form-text">Upload your paper as a PDF file (max 10MB).</div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="mb-0">Submission Guidelines</h6>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled small">
                                <li><i class="fas fa-check text-success me-2"></i>Paper must be in PDF format</li>
                                <li><i class="fas fa-check text-success me-2"></i>Maximum file size: 10MB</li>
                                <li><i class="fas fa-check text-success me-2"></i>Abstract should be 200-300 words</li>
                                <li><i class="fas fa-check text-success me-2"></i>Include relevant keywords</li>
                                <li><i class="fas fa-check text-success me-2"></i>Ensure all information is accurate</li>
                            </ul>
                            
                            <div class="alert alert-info mt-3">
                                <small>
                                    <strong>Note:</strong> Your paper will be automatically set to "Under Review" status after submission. 
                                    You will be notified of the review results via email.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('author.dashboard') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-times me-1"></i>Cancel
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-paper-plane me-1"></i>Submit Paper
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

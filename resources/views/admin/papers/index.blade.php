@extends('layouts.admin')

@section('title', 'Papers - Admin')
@section('page_title', 'Papers')

@section('content')
<div class="table-card">
    <div class="table-header">
        <h5 class="mb-0">All Papers</h5>
        
    </div>
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="table-responsive">
        @if($papers->count() > 0)
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Status</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($papers as $paper)
                        <tr>
                            <td>
                                <div class="fw-bold">{{ Str::limit($paper->title, 50) }}</div>
                            </td>
                            <td>
                                <div>{{ $paper->author_name }}</div>
                                <small class="text-muted">{{ $paper->author_email }}</small>
                            </td>
                            <td>
                                <span class="badge 
                                    @if($paper->status == 'accepted') bg-success
                                    @elseif($paper->status == 'rejected') bg-danger
                                    @else bg-warning @endif">
                                    {{ ucfirst($paper->status) }}
                                </span>
                            </td>
                            <td>
                                <small class="text-muted">{{ $paper->created_at->format('M d, Y') }}</small>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.papers.show', $paper) }}" class="btn btn-outline-primary btn-sm">View</a>
                                    <a href="{{ route('admin.papers.edit', $paper) }}" class="btn btn-outline-secondary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.papers.destroy', $paper) }}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this paper?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
            <div class="p-3 border-top">
                {{ $papers->links() }}
            </div>
        @else
            <div class="text-center p-5">
                <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No papers yet</h5>
               
            </div>
        @endif
    </div>
</div>
@endsection



@extends('layouts.admin')

@section('title', 'Users - Admin')
@section('page_title', 'Users')

@section('content')
<div class="table-card">
    <div class="table-header">
        <h5 class="mb-0">All Users</h5>
        <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i>New User
        </a>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="table-responsive">
        @if($users->count() > 0)
            <table class="table table-hover">
                <thead class="table-light">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <div class="fw-bold">{{ $user->name }}</div>
                            </td>
                            <td>
                                <div>{{ $user->email }}</div>
                            </td>
                            <td>
                                <small class="text-muted">{{ $user->created_at->format('M d, Y') }}</small>
                            </td>
                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.users.show', $user) }}" class="btn btn-outline-primary btn-sm">View</a>
                                    <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-outline-secondary btn-sm">Edit</a>
                                    <form method="POST" action="{{ route('admin.users.destroy', $user) }}" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this user?')">
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
                {{ $users->links() }}
            </div>
        @else
            <div class="text-center p-5">
                <i class="fas fa-users fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No users yet</h5>
                <p class="text-muted mb-3">Get started by creating a new user.</p>
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-1"></i>Create User
                </a>
            </div>
        @endif
    </div>
</div>
@endsection



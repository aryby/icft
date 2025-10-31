@extends('layouts.admin')

@section('title', 'Registrations - Admin')
@section('page_title', 'Registrations')


@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="table-card">
        <div class="table-header">
            <h5 class="mb-0">All Registrations</h5>
            <div class="d-flex gap-2">
                <select class="form-select form-select-sm" id="statusFilter" style="width: auto;">
                    <option value="">All Status</option>
                    <option value="pending">Pending</option>
                    <option value="verified">Verified</option>
                    <option value="rejected">Rejected</option>
                </select>
            </div>
        </div>
        
        @if($registrations->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Affiliation</th>
                            <th>Country</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($registrations as $registration)
                            <tr>
                                <td>{{ $registration->id }}</td>
                                <td>{{ $registration->full_name }}</td>
                                <td>{{ $registration->email }}</td>
                                <td>
                                    <span class="badge bg-info text-capitalize">
                                        {{ $registration->registration_type }}
                                    </span>
                                </td>
                                <td>{{ $registration->affiliation }}</td>
                                <td>{{ $registration->country }}</td>
                                <td>${{ number_format($registration->registration_fee, 2) }}</td>
                                <td>
                                    @if($registration->payment_status === 'pending')
                                        <span class="badge bg-warning">Pending</span>
                                    @elseif($registration->payment_status === 'verified')
                                        <span class="badge bg-success">Verified</span>
                                    @elseif($registration->payment_status === 'rejected')
                                        <span class="badge bg-danger">Rejected</span>
                                    @else
                                        <span class="badge bg-secondary">{{ ucfirst($registration->payment_status) }}</span>
                                    @endif
                                </td>
                                <td>{{ $registration->created_at->format('M d, Y') }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('admin.registrations.show', $registration) }}" 
                                           class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @if($registration->payment_status === 'pending')
                                            <a href="{{ route('admin.registrations.verify', $registration) }}" 
                                               class="btn btn-sm btn-outline-success" title="Verify Payment">
                                                <i class="fas fa-check"></i>
                                            </a>
                                        @endif
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="d-flex justify-content-center">
                {{ $registrations->links() }}
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-credit-card fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">No registrations found</h5>
                <p class="text-muted">No one has registered yet.</p>
            </div>
        @endif
    </div>



    <script>
        // Status filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const statusFilter = document.getElementById('statusFilter');
            if (statusFilter) {
                statusFilter.addEventListener('change', function() {
                    const status = this.value;
                    const url = new URL(window.location);
                    
                    if (status) {
                        url.searchParams.set('status', status);
                    } else {
                        url.searchParams.delete('status');
                    }
                    
                    window.location.href = url.toString();
                });
            }
        });
    </script>
@endsection

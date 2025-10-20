@extends('layouts.admin')

@section('title', 'Admin Dashboard - ICFT 2025')
@section('page_title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="text-sm text-gray-500">Total Papers</div>
        <div class="text-3xl font-bold text-blue-600">0</div>
    </div>
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="text-sm text-gray-500">Registered Users</div>
        <div class="text-3xl font-bold text-green-600">0</div>
    </div>
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="text-sm text-gray-500">Pending Reviews</div>
        <div class="text-3xl font-bold text-yellow-600">0</div>
    </div>
    <div class="bg-white rounded-lg border border-gray-200 p-6">
        <div class="text-sm text-gray-500">Accepted Papers</div>
        <div class="text-3xl font-bold text-purple-600">0</div>
    </div>
</div>

<div class="bg-white rounded-lg border border-gray-200 p-6">
    <h2 class="text-lg font-semibold text-gray-900 mb-4">Recent Activity</h2>
    <p class="text-gray-600">No recent activity to display.</p>
</div>
@endsection

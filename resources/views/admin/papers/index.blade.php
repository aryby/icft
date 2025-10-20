@extends('layouts.admin')

@section('title', 'Papers - Admin')
@section('page_title', 'Papers')

@section('content')
<div class="bg-white rounded-lg border border-gray-200">
    <div class="p-4 border-b">
        <div class="flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-900">All Papers</h2>
            <a href="{{ route('admin.papers.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">New Paper</a>
        </div>
    </div>
    <div class="p-4">
        <div class="text-gray-600">No papers yet.</div>
    </div>
    
</div>
@endsection



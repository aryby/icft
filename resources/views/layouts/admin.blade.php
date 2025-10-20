<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Admin - ICFT 2025')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 hidden md:block">
            <div class="h-16 flex items-center px-6 border-b">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                    <div class="h-8 w-8 bg-blue-600 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">IC</span>
                    </div>
                    <span class="ml-3 text-lg font-bold text-gray-900">Admin</span>
                </a>
            </div>
            <nav class="p-4 space-y-1">
                <a href="{{ route('admin.dashboard') }}" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.dashboard*') ? 'bg-gray-100 text-blue-700' : '' }}">Dashboard</a>
                <a href="{{ route('admin.papers.index') }}" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.papers.*') ? 'bg-gray-100 text-blue-700' : '' }}">Papers</a>
                <a href="{{ route('admin.users.index') }}" class="block px-3 py-2 rounded text-gray-700 hover:bg-gray-100 {{ request()->routeIs('admin.users.*') ? 'bg-gray-100 text-blue-700' : '' }}">Users</a>
            </nav>
        </aside>

        <!-- Main -->
        <div class="flex-1 flex flex-col">
            <!-- Topbar -->
            <header class="h-16 bg-white border-b border-gray-200 flex items-center justify-between px-4">
                <div class="flex items-center space-x-3">
                    <button class="md:hidden inline-flex items-center justify-center p-2 rounded text-gray-600 hover:bg-gray-100" id="admin-mobile-menu">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                    <h1 class="text-lg font-semibold text-gray-900">@yield('page_title', 'Dashboard')</h1>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-blue-600">View Site</a>
                </div>
            </header>

            <main class="p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const btn = document.getElementById('admin-mobile-menu');
            if (!btn) return;
            btn.addEventListener('click', () => {
                // Simple toggle for demo; real impl: slide-in drawer
                alert('Open admin sidebar (mobile)');
            });
        });
    </script>
</body>
</html>



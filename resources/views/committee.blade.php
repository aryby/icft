@extends('layouts.app')

@section('title', 'Committee - ICFT 2025')
@section('description', 'Meet the distinguished committee members of ICFT 2025, including program chairs, track chairs, and advisory board members from leading institutions worldwide.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Conference Committee</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Meet the distinguished researchers and industry leaders who make ICFT 2025 possible
            </p>
        </div>
    </div>
</section>

<!-- General Chairs -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">General Chairs</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Leading the overall conference organization and strategic direction
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8 text-center">
                <div class="w-24 h-24 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-2xl font-bold">JS</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Dr. Jennifer Smith</h3>
                <p class="text-blue-600 font-semibold mb-2">Stanford University</p>
                <p class="text-gray-600 mb-4">Professor of Computer Science</p>
                <p class="text-gray-600 text-sm">
                    Leading researcher in artificial intelligence and machine learning with over 15 years of experience in academia and industry.
                </p>
            </div>
            
            <div class="bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl p-8 text-center">
                <div class="w-24 h-24 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-2xl font-bold">MC</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Dr. Michael Chen</h3>
                <p class="text-green-600 font-semibold mb-2">MIT</p>
                <p class="text-gray-600 mb-4">Professor of Electrical Engineering</p>
                <p class="text-gray-600 text-sm">
                    Expert in quantum computing and quantum information theory with numerous publications in top-tier journals.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Program Chairs -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Program Chairs</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Overseeing the technical program and paper review process
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-6 shadow-lg text-center hover:shadow-xl transition-shadow duration-200">
                <div class="w-20 h-20 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white text-xl font-bold">AR</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Anna Rodriguez</h3>
                <p class="text-purple-600 font-semibold mb-2">UC Berkeley</p>
                <p class="text-gray-600 text-sm">AI & Machine Learning Track</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg text-center hover:shadow-xl transition-shadow duration-200">
                <div class="w-20 h-20 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white text-xl font-bold">DK</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. David Kim</h3>
                <p class="text-orange-600 font-semibold mb-2">Carnegie Mellon</p>
                <p class="text-gray-600 text-sm">Quantum Computing Track</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg text-center hover:shadow-xl transition-shadow duration-200">
                <div class="w-20 h-20 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white text-xl font-bold">SL</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Sarah Lee</h3>
                <p class="text-red-600 font-semibold mb-2">Harvard University</p>
                <p class="text-gray-600 text-sm">Biotechnology Track</p>
            </div>
        </div>
    </div>
</section>

<!-- Track Chairs -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Track Chairs</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Leading experts in their respective fields managing paper reviews
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">AI & ML</h3>
                <p class="text-sm text-gray-600">Dr. Robert Johnson<br>Stanford University</p>
            </div>
            
            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Quantum Computing</h3>
                <p class="text-sm text-gray-600">Dr. Lisa Wang<br>MIT</p>
            </div>
            
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Biotechnology</h3>
                <p class="text-sm text-gray-600">Dr. James Brown<br>Harvard Medical</p>
            </div>
            
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">IoT & Smart Systems</h3>
                <p class="text-sm text-gray-600">Dr. Maria Garcia<br>UC Berkeley</p>
            </div>
            
            <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 bg-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Cybersecurity</h3>
                <p class="text-sm text-gray-600">Dr. Alex Thompson<br>Carnegie Mellon</p>
            </div>
            
            <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 bg-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Emerging Tech</h3>
                <p class="text-sm text-gray-600">Dr. Emily Davis<br>Stanford University</p>
            </div>
            
            <div class="bg-gradient-to-br from-teal-50 to-cyan-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 bg-teal-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Data Science</h3>
                <p class="text-sm text-gray-600">Dr. Kevin Liu<br>MIT</p>
            </div>
            
            <div class="bg-gradient-to-br from-pink-50 to-rose-100 rounded-xl p-6 text-center">
                <div class="w-16 h-16 bg-pink-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Human-Computer Interaction</h3>
                <p class="text-sm text-gray-600">Dr. Rachel Green<br>UC Berkeley</p>
            </div>
        </div>
    </div>
</section>

<!-- Advisory Board -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Advisory Board</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Distinguished leaders providing strategic guidance and oversight
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                <div class="w-20 h-20 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-xl font-bold">PT</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Patricia Taylor</h3>
                <p class="text-gray-600 font-semibold mb-2">Google Research</p>
                <p class="text-gray-600 text-sm">VP of Research</p>
            </div>
            
            <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                <div class="w-20 h-20 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-xl font-bold">WM</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. William Martinez</h3>
                <p class="text-gray-600 font-semibold mb-2">Microsoft Research</p>
                <p class="text-gray-600 text-sm">Principal Researcher</p>
            </div>
            
            <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                <div class="w-20 h-20 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-white text-xl font-bold">AS</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Dr. Amanda Singh</h3>
                <p class="text-gray-600 font-semibold mb-2">OpenAI</p>
                <p class="text-gray-600 text-sm">Research Director</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Join Our Community</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Be part of a conference led by world-renowned experts and contribute to the future of technology.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('submission') }}" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-semibold text-lg transition-colors duration-200 shadow-lg hover:shadow-xl">
                Submit Your Paper
            </a>
            <a href="{{ route('contact') }}" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-200">
                Contact Us
            </a>
        </div>
    </div>
</section>
@endsection

@extends('layouts.app')

@section('title', 'About ICFT 2025 - International Conference on Future Technology')
@section('description', 'Learn about ICFT 2025, our mission, vision, and the exciting program we have planned for this premier international conference on future technology.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">About ICFT 2025</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Discover the vision, mission, and exciting program that makes ICFT 2025 a premier destination for future technology research and innovation.
            </p>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Our Mission</h2>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    ICFT 2025 aims to bring together the world's leading researchers, academics, and industry professionals to explore and discuss the latest innovations in future technology. We are committed to fostering collaboration, knowledge sharing, and the advancement of cutting-edge research that will shape our technological future.
                </p>
                <p class="text-lg text-gray-600 leading-relaxed">
                    Our mission is to create a platform where groundbreaking ideas meet practical applications, where theoretical research transforms into real-world solutions, and where the next generation of technology leaders can connect and collaborate.
                </p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl p-8">
                <div class="w-16 h-16 bg-blue-600 rounded-xl flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">
                    To be the premier international conference that drives innovation in future technology, creating a global community of researchers and practitioners who are shaping the technological landscape of tomorrow.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Conference Highlights -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Conference Highlights</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                What makes ICFT 2025 a must-attend event for technology professionals and researchers
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-200">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">World-Class Speakers</h3>
                <p class="text-gray-600">Hear from leading experts and pioneers in AI, quantum computing, biotechnology, and emerging technologies.</p>
            </div>
            
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-200">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Cutting-Edge Research</h3>
                <p class="text-gray-600">Present and discuss the latest research findings and breakthrough innovations in future technology.</p>
            </div>
            
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-200">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V8a2 2 0 012-2V6"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Networking Opportunities</h3>
                <p class="text-gray-600">Connect with peers, potential collaborators, and industry leaders from around the world.</p>
            </div>
            
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-200">
                <div class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Interactive Workshops</h3>
                <p class="text-gray-600">Participate in hands-on workshops and tutorials led by industry experts and researchers.</p>
            </div>
            
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-200">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Industry Exhibition</h3>
                <p class="text-gray-600">Explore the latest products and services from leading technology companies and startups.</p>
            </div>
            
            <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-200">
                <div class="w-12 h-12 bg-indigo-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-3">Real-Time Impact</h3>
                <p class="text-gray-600">Be part of discussions that will influence the future direction of technology and innovation.</p>
            </div>
        </div>
    </div>
</section>

<!-- Conference Program -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Conference Program</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                A comprehensive three-day program designed to maximize learning, networking, and collaboration
            </p>
        </div>
        
        <div class="space-y-8">
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mr-4">
                        <span class="text-white font-bold text-lg">1</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Day 1: Opening & Keynotes</h3>
                </div>
                <p class="text-gray-600 mb-4">Conference opening ceremony, keynote presentations from industry leaders, and plenary sessions covering the latest trends in future technology.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Opening ceremony and welcome address</li>
                    <li>• Keynote presentations on AI and quantum computing</li>
                    <li>• Plenary sessions on emerging technologies</li>
                    <li>• Welcome reception and networking</li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-r from-green-50 to-emerald-50 rounded-2xl p-8">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mr-4">
                        <span class="text-white font-bold text-lg">2</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Day 2: Research Presentations</h3>
                </div>
                <p class="text-gray-600 mb-4">Parallel sessions featuring research presentations, panel discussions, and interactive workshops across all conference topics.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Parallel technical sessions</li>
                    <li>• Panel discussions on future technology trends</li>
                    <li>• Interactive workshops and tutorials</li>
                    <li>• Industry exhibition and poster sessions</li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-r from-purple-50 to-violet-50 rounded-2xl p-8">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mr-4">
                        <span class="text-white font-bold text-lg">3</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Day 3: Innovation & Future</h3>
                </div>
                <p class="text-gray-600 mb-4">Focus on innovation showcases, startup presentations, and forward-looking discussions about the future of technology.</p>
                <ul class="text-gray-600 space-y-2">
                    <li>• Innovation showcases and startup presentations</li>
                    <li>• Future technology roadmap discussions</li>
                    <li>• Closing keynote and awards ceremony</li>
                    <li>• Conference dinner and networking</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Join Us at ICFT 2025</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Be part of the conversation that will shape the future of technology. Register now and secure your spot at this premier international conference.
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

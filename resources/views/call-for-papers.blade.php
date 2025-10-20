@extends('layouts.app')

@section('title', 'Call for Papers - ICFT 2025')
@section('description', 'Submit your research papers to ICFT 2025. We invite original contributions in AI, quantum computing, biotechnology, and emerging technologies. Deadline: March 15, 2025.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Call for Papers</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Submit your original research and be part of the premier international conference on future technology
            </p>
        </div>
    </div>
</section>

<!-- Important Dates -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Important Dates</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Mark these important deadlines in your calendar
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-8 shadow-lg text-center hover:shadow-xl transition-shadow duration-200">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Paper Submission Deadline</h3>
                <p class="text-2xl font-bold text-blue-600 mb-2">March 15, 2025</p>
                <p class="text-gray-600">Submit your full papers and abstracts</p>
            </div>
            
            <div class="bg-white rounded-xl p-8 shadow-lg text-center hover:shadow-xl transition-shadow duration-200">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Notification of Acceptance</h3>
                <p class="text-2xl font-bold text-green-600 mb-2">May 1, 2025</p>
                <p class="text-gray-600">Authors will be notified of acceptance</p>
            </div>
            
            <div class="bg-white rounded-xl p-8 shadow-lg text-center hover:shadow-xl transition-shadow duration-200">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Camera-Ready Submission</h3>
                <p class="text-2xl font-bold text-purple-600 mb-2">June 1, 2025</p>
                <p class="text-gray-600">Final paper submission deadline</p>
            </div>
        </div>
    </div>
</section>

<!-- Topics of Interest -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Topics of Interest</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                We welcome original research papers in the following areas of future technology
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="w-12 h-12 bg-blue-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Artificial Intelligence & Machine Learning</h3>
                <ul class="text-gray-600 text-sm space-y-1">
                    <li>• Deep learning and neural networks</li>
                    <li>• Natural language processing</li>
                    <li>• Computer vision and image processing</li>
                    <li>• AI ethics and responsible AI</li>
                    <li>• Reinforcement learning</li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="w-12 h-12 bg-green-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Quantum Computing</h3>
                <ul class="text-gray-600 text-sm space-y-1">
                    <li>• Quantum algorithms and complexity</li>
                    <li>• Quantum cryptography</li>
                    <li>• Quantum machine learning</li>
                    <li>• Quantum hardware and systems</li>
                    <li>• Quantum applications</li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="w-12 h-12 bg-purple-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Biotechnology & Bioinformatics</h3>
                <ul class="text-gray-600 text-sm space-y-1">
                    <li>• Computational biology</li>
                    <li>• Synthetic biology</li>
                    <li>• Medical technology</li>
                    <li>• Drug discovery and design</li>
                    <li>• Genomics and proteomics</li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-xl p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="w-12 h-12 bg-orange-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">IoT & Smart Systems</h3>
                <ul class="text-gray-600 text-sm space-y-1">
                    <li>• Internet of Things</li>
                    <li>• Smart cities and infrastructure</li>
                    <li>• Edge computing</li>
                    <li>• Sensor networks</li>
                    <li>• Connected devices</li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-xl p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="w-12 h-12 bg-red-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Cybersecurity</h3>
                <ul class="text-gray-600 text-sm space-y-1">
                    <li>• Network security</li>
                    <li>• Cryptography and encryption</li>
                    <li>• Privacy-preserving technologies</li>
                    <li>• Threat detection and response</li>
                    <li>• Digital forensics</li>
                </ul>
            </div>
            
            <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 rounded-xl p-6 hover:shadow-lg transition-shadow duration-200">
                <div class="w-12 h-12 bg-indigo-600 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Emerging Technologies</h3>
                <ul class="text-gray-600 text-sm space-y-1">
                    <li>• Blockchain and distributed systems</li>
                    <li>• Augmented and virtual reality</li>
                    <li>• Robotics and automation</li>
                    <li>• 5G and next-gen networks</li>
                    <li>• Nanotechnology</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Submission Guidelines -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Submission Guidelines</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Please follow these guidelines when preparing your paper submission
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <div class="space-y-8">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Paper Format</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Maximum 8 pages including references and appendices</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>IEEE conference format (double-column)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>PDF format only</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-blue-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Single-blind review process</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Review Process</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Each paper reviewed by at least 3 experts</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Originality and technical contribution</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Clarity and presentation quality</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-green-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Relevance to conference topics</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="space-y-8">
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Submission Requirements</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Original, unpublished work</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Clear abstract (150-250 words)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Keywords (3-5 relevant terms)</span>
                        </li>
                        <li class="flex items-start">
                            <svg class="w-5 h-5 text-purple-600 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            <span>Complete author information</span>
                        </li>
                    </ul>
                </div>
                
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Publication</h3>
                    <p class="text-gray-600 mb-4">
                        Accepted papers will be published in the conference proceedings and will be indexed in major databases including IEEE Xplore.
                    </p>
                    <ul class="space-y-2 text-gray-600">
                        <li>• IEEE Xplore Digital Library</li>
                        <li>• Scopus and Web of Science</li>
                        <li>• Google Scholar indexing</li>
                        <li>• DOI assignment</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Submit Your Paper?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Join the conversation and contribute to the future of technology. Submit your research paper today.
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

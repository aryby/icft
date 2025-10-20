@extends('layouts.app')

@section('title', 'Paper Submission - ICFT 2025')
@section('description', 'Submit your research paper to ICFT 2025. Follow our submission guidelines and upload your paper through our secure submission system. Deadline: March 15, 2025.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Paper Submission</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Submit your research paper to ICFT 2025 and be part of the premier international conference on future technology
            </p>
        </div>
    </div>
</section>

<!-- Submission Form -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Submit Your Paper</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Please fill out the form below to submit your research paper for review
            </p>
        </div>
        
        <div class="bg-gray-50 rounded-2xl p-8 shadow-lg">
            <form class="space-y-8">
                <!-- Paper Information -->
                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">Paper Information</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="paper-title" class="block text-sm font-medium text-gray-700 mb-2">Paper Title *</label>
                            <input type="text" id="paper-title" name="paper-title" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter your paper title">
                        </div>
                        
                        <div>
                            <label for="track" class="block text-sm font-medium text-gray-700 mb-2">Conference Track *</label>
                            <select id="track" name="track" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                                <option value="">Select a track</option>
                                <option value="ai-ml">Artificial Intelligence & Machine Learning</option>
                                <option value="quantum">Quantum Computing</option>
                                <option value="biotech">Biotechnology & Bioinformatics</option>
                                <option value="iot">IoT & Smart Systems</option>
                                <option value="cybersecurity">Cybersecurity</option>
                                <option value="emerging">Emerging Technologies</option>
                                <option value="data-science">Data Science</option>
                                <option value="hci">Human-Computer Interaction</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mt-6">
                        <label for="abstract" class="block text-sm font-medium text-gray-700 mb-2">Abstract *</label>
                        <textarea id="abstract" name="abstract" rows="4" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter your abstract (150-250 words)"></textarea>
                    </div>
                    
                    <div class="mt-6">
                        <label for="keywords" class="block text-sm font-medium text-gray-700 mb-2">Keywords *</label>
                        <input type="text" id="keywords" name="keywords" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter 3-5 keywords separated by commas">
                    </div>
                </div>
                
                <!-- Author Information -->
                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">Author Information</h3>
                    
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                                <input type="text" id="first-name" name="first-name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter first name">
                            </div>
                            
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                                <input type="text" id="last-name" name="last-name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter last name">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter email address">
                            </div>
                            
                            <div>
                                <label for="affiliation" class="block text-sm font-medium text-gray-700 mb-2">Affiliation *</label>
                                <input type="text" id="affiliation" name="affiliation" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter your institution/organization">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="country" class="block text-sm font-medium text-gray-700 mb-2">Country *</label>
                                <select id="country" name="country" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                                    <option value="">Select your country</option>
                                    <option value="US">United States</option>
                                    <option value="CA">Canada</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="DE">Germany</option>
                                    <option value="FR">France</option>
                                    <option value="JP">Japan</option>
                                    <option value="CN">China</option>
                                    <option value="IN">India</option>
                                    <option value="AU">Australia</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter phone number">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- File Upload -->
                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">Paper Upload</h3>
                    
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-blue-400 transition-colors duration-200">
                        <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                        </svg>
                        <p class="text-lg font-medium text-gray-900 mb-2">Upload your paper</p>
                        <p class="text-gray-600 mb-4">PDF format only, maximum 8 pages</p>
                        <input type="file" id="paper-file" name="paper-file" accept=".pdf" required class="hidden">
                        <label for="paper-file" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold cursor-pointer hover:bg-blue-700 transition-colors duration-200">
                            Choose File
                        </label>
                        <p class="text-sm text-gray-500 mt-2">File size limit: 10MB</p>
                    </div>
                </div>
                
                <!-- Terms and Conditions -->
                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <h3 class="text-xl font-semibold text-gray-900 mb-6">Terms and Conditions</h3>
                    
                    <div class="space-y-4">
                        <label class="flex items-start">
                            <input type="checkbox" name="originality" required class="mt-1 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="ml-3 text-sm text-gray-700">
                                I confirm that this paper is original and has not been published elsewhere, nor is it currently under review by another conference or journal. *
                            </span>
                        </label>
                        
                        <label class="flex items-start">
                            <input type="checkbox" name="copyright" required class="mt-1 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="ml-3 text-sm text-gray-700">
                                I agree to transfer copyright to ICFT 2025 if the paper is accepted for publication. *
                            </span>
                        </label>
                        
                        <label class="flex items-start">
                            <input type="checkbox" name="attendance" required class="mt-1 h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <span class="ml-3 text-sm text-gray-700">
                                I understand that at least one author must register and attend the conference to present the paper if accepted. *
                            </span>
                        </label>
                    </div>
                </div>
                
                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-12 py-4 rounded-lg font-semibold text-lg transition-colors duration-200 shadow-lg hover:shadow-xl">
                        Submit Paper
                    </button>
                    <p class="text-sm text-gray-500 mt-4">
                        By submitting, you agree to our terms and conditions. You will receive a confirmation email upon successful submission.
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Important Reminders -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Important Reminders</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Please keep these important points in mind before submitting
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Submission Deadline</h3>
                <p class="text-gray-600 text-sm">All papers must be submitted by March 15, 2025 at 11:59 PM PST. Late submissions will not be accepted.</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Format Requirements</h3>
                <p class="text-gray-600 text-sm">Papers must follow IEEE conference format, be maximum 8 pages, and submitted as PDF files only.</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Review Process</h3>
                <p class="text-gray-600 text-sm">Each paper will be reviewed by at least 3 experts. Notification of acceptance will be sent by May 1, 2025.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Need Help with Submission?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Our team is here to help you with any questions about the submission process or requirements.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-semibold text-lg transition-colors duration-200 shadow-lg hover:shadow-xl">
                Contact Support
            </a>
            <a href="{{ route('call-for-papers') }}" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-200">
                View Guidelines
            </a>
        </div>
    </div>
</section>
@endsection

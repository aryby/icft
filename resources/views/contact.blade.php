@extends('layouts.app')

@section('title', 'Contact Us - ICFT 2025')
@section('description', 'Get in touch with the ICFT 2025 organizing committee. Contact us for questions about paper submission, registration, sponsorship, or general inquiries.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                Get in touch with our organizing committee for any questions or inquiries about ICFT 2025
            </p>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Send us a Message</h2>
                <p class="text-lg text-gray-600 mb-8">
                    Have a question about the conference? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
                </p>
                
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="first-name" class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                            <input type="text" id="first-name" name="first-name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter your first name">
                        </div>
                        
                        <div>
                            <label for="last-name" class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                            <input type="text" id="last-name" name="last-name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter your last name">
                        </div>
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" id="email" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter your email address">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject *</label>
                        <select id="subject" name="subject" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200">
                            <option value="">Select a subject</option>
                            <option value="paper-submission">Paper Submission</option>
                            <option value="registration">Registration</option>
                            <option value="sponsorship">Sponsorship</option>
                            <option value="program">Conference Program</option>
                            <option value="travel">Travel & Accommodation</option>
                            <option value="technical">Technical Issues</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                        <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors duration-200" placeholder="Enter your message"></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-colors duration-200 shadow-lg hover:shadow-xl">
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Details -->
            <div class="space-y-8">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">Get in Touch</h2>
                    <p class="text-lg text-gray-600 mb-8">
                        We're here to help! Reach out to us through any of the following channels.
                    </p>
                </div>
                
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Email</h3>
                            <p class="text-gray-600 mb-2">General inquiries and support</p>
                            <a href="mailto:info@icft2025.org" class="text-blue-600 hover:text-blue-700 font-medium">info@icft2025.org</a>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Phone</h3>
                            <p class="text-gray-600 mb-2">Monday - Friday, 9 AM - 5 PM PST</p>
                            <a href="tel:+1234567890" class="text-green-600 hover:text-green-700 font-medium">+1 (234) 567-890</a>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4 flex-shrink-0">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900 mb-1">Address</h3>
                            <p class="text-gray-600 mb-2">Conference venue and mailing address</p>
                            <p class="text-purple-600 font-medium">
                                Moscone Center<br>
                                747 Howard St<br>
                                San Francisco, CA 94103<br>
                                United States
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="pt-6 border-t border-gray-200">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Follow Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center text-white hover:bg-blue-700 transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-700 rounded-lg flex items-center justify-center text-white hover:bg-blue-800 transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-blue-800 rounded-lg flex items-center justify-center text-white hover:bg-blue-900 transition-colors duration-200">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M20 10C20 4.477 15.523 0 10 0S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Frequently Asked Questions</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Find answers to common questions about ICFT 2025
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-6">
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">When is the paper submission deadline?</h3>
                <p class="text-gray-600">The paper submission deadline is March 15, 2025 at 11:59 PM PST. Late submissions will not be accepted.</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">What is the conference format?</h3>
                <p class="text-gray-600">ICFT 2025 will be held in-person at the Moscone Center in San Francisco, CA, with some virtual components for international participants.</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">How much does registration cost?</h3>
                <p class="text-gray-600">Registration fees vary by category. Early bird rates are available until May 31, 2025. Detailed pricing will be announced soon.</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Are there any travel grants available?</h3>
                <p class="text-gray-600">Yes, we offer limited travel grants for students and early-career researchers. Applications will open in April 2025.</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-lg">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Can I present multiple papers?</h3>
                <p class="text-gray-600">Yes, you can submit and present multiple papers, but each paper must have at least one different co-author.</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-16 bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Still Have Questions?</h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
            Don't hesitate to reach out to us. We're here to help make your ICFT 2025 experience exceptional.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="mailto:info@icft2025.org" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-4 rounded-lg font-semibold text-lg transition-colors duration-200 shadow-lg hover:shadow-xl">
                Email Us
            </a>
            <a href="tel:+1234567890" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-lg font-semibold text-lg transition-all duration-200">
                Call Us
            </a>
        </div>
    </div>
</section>
@endsection

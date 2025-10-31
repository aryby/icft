@extends('layouts.app')

@section('title', 'Contact Us - DESDI 2026')
@section('description', 'Get in touch with the DESDI 2026 organizing committee. Contact us for questions about paper submission, registration, sponsorship, or general inquiries.')

@section('content')
<!-- Page Header -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Contact Us</div>
        </div>
        <div class="text-center">
            <p class="lead">
                Get in touch with our organizing committee for any questions or inquiries about DESDI 2026
            </p>
        </div>
    </div>
</div>

<!-- Contact Information -->
<div class="row-fluid">
    <div class="span6">
        <div class="well">
            <h3>Send us a Message</h3>
            <p>
                Have a question about the conference? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
            
            <form class="form-horizontal">
                <div class="control-group">
                    <label class="control-label" for="first-name">First Name *</label>
                    <div class="controls">
                        <input type="text" id="first-name" name="first-name" class="input-xlarge" required placeholder="Enter your first name">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="last-name">Last Name *</label>
                    <div class="controls">
                        <input type="text" id="last-name" name="last-name" class="input-xlarge" required placeholder="Enter your last name">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="email">Email Address *</label>
                    <div class="controls">
                        <input type="email" id="email" name="email" class="input-xlarge" required placeholder="Enter your email address">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="subject">Subject *</label>
                    <div class="controls">
                        <select id="subject" name="subject" class="input-xlarge" required>
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
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="message">Message *</label>
                    <div class="controls">
                        <textarea id="message" name="message" rows="6" class="input-xlarge" required placeholder="Enter your message"></textarea>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <button type="submit" class="btn btn-primary btn-large">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Contact Details -->
    <div class="span6">
        <div class="well">
            <h3>Get in Touch</h3>
            <p>
                We're here to help! Reach out to us through any of the following channels.
            </p>
            
            <div class="well">
                <h4>Email</h4>
                <p>General inquiries and support</p>
                <p><strong>desdi26@desdi.org</strong></p>
            </div>
            
            <div class="well">
                <h4>Conference Venue</h4>
                <p>Morocco</p>
                <p>April 23-25, 2026</p>
            </div>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Frequently Asked Questions</div>
        </div>
        <p class="text-center lead">Find answers to common questions about DESDI 2026</p>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="well">
            <h4>When is the paper submission deadline?</h4>
            <p>The paper submission deadline is <strong>December 31, 2025</strong> at 11:59 PM. Late submissions will not be accepted.</p>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="well">
            <h4>What is the conference format?</h4>
            <p>DESDI 2026 will be held in-person in Morocco, with some virtual components for international participants.</p>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="well">
            <h4>How much does registration cost?</h4>
            <p>Registration fees vary by category. Early registration rates are available until March 1st, 2026. Please check the registration page for detailed pricing.</p>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="well">
            <h4>Can I present multiple papers?</h4>
            <p>Yes, you can submit and present multiple papers, but each paper must have at least one different co-author.</p>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-info text-center">
            <h2>Still Have Questions?</h2>
            <p class="lead">
                Don't hesitate to reach out to us. We're here to help make your DESDI 2026 experience exceptional.
            </p>
            <p>
                <a href="mailto:desdi26@desdi.org" class="btn btn-primary btn-large">Email Us</a>
            </p>
        </div>
    </div>
</div>
@endsection
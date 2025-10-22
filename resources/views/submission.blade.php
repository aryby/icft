@extends('layouts.app')

@section('title', 'Paper Submission - DESDI 2025')
@section('description', 'Submit your research paper to DESDI 2025. Follow our submission guidelines and upload your paper through our secure submission system. Deadline: September 03, 2025.')

@section('content')
<!-- Page Header -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Paper Submission</div>
        </div>
        <div class="text-center">
            <p class="lead">
                Submit your research paper to DESDI 2025 and be part of the premier international conference on digital economy and data innovation
            </p>
        </div>
    </div>
</div>

<!-- Submission Form -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Submit Your Paper</div>
        </div>
        <p class="text-center lead">
            Please fill out the form below to submit your research paper for review
        </p>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <form class="form-horizontal">
            <!-- Paper Information -->
            <div class="well">
                <h3>Paper Information</h3>
                
                <div class="control-group">
                    <label class="control-label" for="paper-title">Paper Title *</label>
                    <div class="controls">
                        <input type="text" id="paper-title" name="paper-title" class="input-xlarge" required placeholder="Enter your paper title">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="track">Conference Track *</label>
                    <div class="controls">
                        <select id="track" name="track" class="input-xlarge" required>
                            <option value="">Select a track</option>
                            <option value="digital-economy">Digital Economy, Governance & Policy</option>
                            <option value="smart-business">Smart Business Models and Innovation</option>
                            <option value="data-analytics">Data Innovation and Analytics</option>
                            <option value="emerging-tech">Emerging Technologies and Applications</option>
                            <option value="regional-case">Regional and Sectoral Case Studies</option>
                        </select>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="abstract">Abstract *</label>
                    <div class="controls">
                        <textarea id="abstract" name="abstract" rows="4" class="input-xlarge" required placeholder="Enter your abstract (150-250 words)"></textarea>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="keywords">Keywords *</label>
                    <div class="controls">
                        <input type="text" id="keywords" name="keywords" class="input-xlarge" required placeholder="Enter 3-5 keywords separated by commas">
                    </div>
                </div>
            </div>
            
            <!-- Author Information -->
            <div class="well">
                <h3>Author Information</h3>
                
                <div class="control-group">
                    <label class="control-label" for="first-name">First Name *</label>
                    <div class="controls">
                        <input type="text" id="first-name" name="first-name" class="input-xlarge" required placeholder="Enter first name">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="last-name">Last Name *</label>
                    <div class="controls">
                        <input type="text" id="last-name" name="last-name" class="input-xlarge" required placeholder="Enter last name">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="email">Email Address *</label>
                    <div class="controls">
                        <input type="email" id="email" name="email" class="input-xlarge" required placeholder="Enter email address">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="affiliation">Affiliation *</label>
                    <div class="controls">
                        <input type="text" id="affiliation" name="affiliation" class="input-xlarge" required placeholder="Enter your institution/organization">
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="country">Country *</label>
                    <div class="controls">
                        <select id="country" name="country" class="input-xlarge" required>
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
                            <option value="MA">Morocco</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="phone">Phone Number</label>
                    <div class="controls">
                        <input type="tel" id="phone" name="phone" class="input-xlarge" placeholder="Enter phone number">
                    </div>
                </div>
            </div>
            
            <!-- File Upload -->
            <div class="well">
                <h3>Paper Upload</h3>
                <div class="control-group">
                    <label class="control-label" for="paper-file">Upload Paper *</label>
                    <div class="controls">
                        <input type="file" id="paper-file" name="paper-file" accept=".pdf" required>
                        <p class="help-block">PDF format only, maximum 8 pages, file size limit: 10MB</p>
                    </div>
                </div>
            </div>
            
            <!-- Terms and Conditions -->
            <div class="well">
                <h3>Terms and Conditions</h3>
                
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" name="originality" required> 
                            I confirm that this paper is original and has not been published elsewhere, nor is it currently under review by another conference or journal. *
                        </label>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" name="copyright" required> 
                            I agree to transfer copyright to DESDI 2025 if the paper is accepted for publication. *
                        </label>
                    </div>
                </div>
                
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" name="attendance" required> 
                            I understand that at least one author must register and attend the conference to present the paper if accepted. *
                        </label>
                    </div>
                </div>
            </div>
            
            <!-- Submit Button -->
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary btn-large">Submit Paper</button>
                    <button type="reset" class="btn btn-default btn-large">Reset Form</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Important Reminders -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Important Reminders</div>
        </div>
        <p class="text-center lead">Please keep these important points in mind before submitting</p>
    </div>
</div>

<div class="row-fluid">
    <div class="span4">
        <div class="well text-center">
            <h4>Submission Deadline</h4>
            <p>All papers must be submitted by <strong>September 03, 2025</strong> at 11:59 PM. Late submissions will not be accepted.</p>
        </div>
    </div>
    <div class="span4">
        <div class="well text-center">
            <h4>Format Requirements</h4>
            <p>Papers must follow IEEE conference format, be maximum 8 pages, and submitted as PDF files only.</p>
        </div>
    </div>
    <div class="span4">
        <div class="well text-center">
            <h4>Review Process</h4>
            <p>Each paper will be reviewed by at least 3 experts. Notification of acceptance will be sent by <strong>September 25, 2025</strong>.</p>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-info text-center">
            <h2>Need Help with Submission?</h2>
            <p class="lead">
                Our team is here to help you with any questions about the submission process or requirements.
            </p>
            <p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-large">Contact Support</a>
                <a href="{{ route('call-for-papers') }}" class="btn btn-default btn-large">View Guidelines</a>
            </p>
        </div>
    </div>
</div>
@endsection
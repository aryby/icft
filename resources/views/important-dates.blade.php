@extends('layouts.app')

@section('title', 'Important Dates - DESDI 2025')
@section('description', 'Important dates and deadlines for DESDI 2025 conference. Paper submission, acceptance notification, registration, and conference dates.')

@section('content')
<!-- Page Header -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Important Dates</div>
        </div>
        <div class="text-center">
            <p class="lead">
                Mark these important dates and deadlines for DESDI 2025 in your calendar
            </p>
        </div>
    </div>
</div>

<!-- Important Dates Timeline -->
<div class="row-fluid">
    <div class="span12">
        <div class="well">
            <h3 class="text-center">DESDI 2025 Conference Timeline</h3>
            <p class="text-center lead">Stay updated with all important deadlines and events</p>
        </div>
    </div>
</div>

<!-- Key Dates -->
<div class="row-fluid">
    <div class="span6">
        <div class="well text-center">
            <h4>Paper/Abstract Submission Start Date</h4>
            <h2 class="text-primary">July 05, 2025</h2>
            <p>Submission portal opens for authors</p>
        </div>
    </div>
    <div class="span6">
        <div class="well text-center">
            <h4>Paper/Abstract Submission Deadline</h4>
            <h2 class="text-info">September 03, 2025</h2>
            <p>Final deadline for paper and abstract submissions</p>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="well text-center">
            <h4>Notification of Acceptance</h4>
            <h2 class="text-success">September 25, 2025</h2>
            <p>Authors will be notified of acceptance decisions</p>
        </div>
    </div>
    <div class="span6">
        <div class="well text-center">
            <h4>Registration Deadline</h4>
            <h2 class="text-warning">October 03, 2025</h2>
            <p>Registration deadline for accepted papers</p>
        </div>
    </div>
</div>

<!-- Conference Dates -->
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-success text-center">
            <h2>DESDI'25 Conference Dates</h2>
            <h1 class="text-success">October 23-24, 2025</h1>
            <p class="lead">Join us in Morocco for the International Conference on Digital Economy Smart Business & Data Innovation</p>
        </div>
    </div>
</div>

<!-- Call for Papers Reminder -->
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-info">
            <h3 class="text-center">Call for Papers & Abstracts</h3>
            <p class="text-center lead">
                We invite original research papers in digital economy, smart business, data innovation, and emerging technologies
            </p>
        </div>
    </div>
</div>

<!-- Submission Guidelines -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Submission Guidelines</div>
        </div>
        <p class="text-center lead">Quick reference for submission requirements</p>
    </div>
</div>

<div class="row-fluid">
    <div class="span4">
        <div class="well text-center">
            <h4>Paper Format</h4>
            <ul class="text-left">
                <li>10-20 pages in Word format</li>
                <li>English language required</li>
                <li>Original, unpublished work</li>
                <li>Relevant to conference topics</li>
            </ul>
        </div>
    </div>
    <div class="span4">
        <div class="well text-center">
            <h4>Abstract Format</h4>
            <ul class="text-left">
                <li>English or French language</li>
                <li>Word format required</li>
                <li>Clear and concise</li>
                <li>Include keywords</li>
            </ul>
        </div>
    </div>
    <div class="span4">
        <div class="well text-center">
            <h4>Review Process</h4>
            <ul class="text-left">
                <li>Peer review by experts</li>
                <li>Plagiarism checking</li>
                <li>Quality assessment</li>
                <li>Notification by September 25</li>
            </ul>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-success text-center">
            <h2>Ready to Submit Your Research?</h2>
            <p class="lead">
                Don't miss the opportunity to present your work at DESDI 2025. Submit your paper before the deadline.
            </p>
            <p>
                <a href="{{ route('submission') }}" class="btn btn-primary btn-large">Submit Your Paper</a>
                <a href="{{ route('call-for-papers') }}" class="btn btn-default btn-large">Call for Papers</a>
                <a href="{{ route('author-instructions') }}" class="btn btn-default btn-large">Author Instructions</a>
            </p>
        </div>
    </div>
</div>

<!-- Contact Information -->
<div class="row-fluid">
    <div class="span12">
        <div class="well text-center">
            <h3>Questions About Important Dates?</h3>
            <p class="lead">
                If you have any questions about deadlines or the submission process, please don't hesitate to contact us.
            </p>
            <p>
                <a href="{{ route('contact') }}" class="btn btn-info btn-large">Contact Us</a>
            </p>
        </div>
    </div>
</div>
@endsection

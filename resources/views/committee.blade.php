@extends('layouts.app')

@section('title', 'Committee - DESDI 2025')
@section('description', 'Meet the distinguished committee members of DESDI 2025, including program chairs, track chairs, and advisory board members from leading institutions worldwide.')

@section('content')
<!-- Page Header -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Conference Committee</div>
        </div>
        <div class="text-center">
            <p class="lead">
                Meet the distinguished researchers and industry leaders who make DESDI 2025 possible
            </p>
        </div>
    </div>
</div>

<!-- General Chairs -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>General Chairs</div>
        </div>
        <p class="text-center lead">
            Leading the overall conference organization and strategic direction
        </p>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="well text-center">
            <h3>Nouri Hicham</h3>
            <h4 class="text-info">Hassan II University, Morocco</h4>
            <p><strong>General Chair</strong></p>
            <p>
                Leading researcher in digital economy and smart business systems with extensive experience in interdisciplinary research.
            </p>
        </div>
    </div>
    <div class="span6">
        <div class="well text-center">
            <h3>Habbat Nassera</h3>
            <h4 class="text-info">Hassan First University, Morocco</h4>
            <p><strong>General Chair</strong></p>
            <p>
                Expert in data innovation and business analytics with numerous publications in digital transformation and smart business models.
            </p>
        </div>
    </div>
</div>

<!-- Program Chairs -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Program Chairs</div>
        </div>
        <p class="text-center lead">
            Overseeing the technical program and paper review process
        </p>
    </div>
</div>

<div class="row-fluid">
    <div class="span4">
        <div class="well text-center">
            <h4>Fatima Ezzahraa Ben Bouazza</h4>
            <p class="text-info">Hassan First University, Morocco</p>
            <p><strong>Programme Committee Chair</strong></p>
        </div>
    </div>
    <div class="span4">
        <div class="well text-center">
            <h4>Naoufal Rouky</h4>
            <p class="text-info">Hassan First University, Morocco</p>
            <p><strong>Programme Committee Chair</strong></p>
        </div>
    </div>
    <div class="span4">
        <div class="well text-center">
            <h4>Jaouad Dabounou</h4>
            <p class="text-info">Hassan First University, Morocco</p>
            <p><strong>Programme Committee Chair</strong></p>
        </div>
    </div>
</div>

<!-- Track Chairs -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Conference Tracks</div>
        </div>
        <p class="text-center lead">
            Leading experts in their respective fields managing paper reviews
        </p>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="well text-center">
            <h4>Digital Economy, Governance & Policy</h4>
            <p><strong>Track 1</strong></p>
        </div>
    </div>
    <div class="span6">
        <div class="well text-center">
            <h4>Smart Business Models and Innovation</h4>
            <p><strong>Track 2</strong></p>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="well text-center">
            <h4>Data Innovation and Analytics</h4>
            <p><strong>Track 3</strong></p>
        </div>
    </div>
    <div class="span6">
        <div class="well text-center">
            <h4>Emerging Technologies and Applications</h4>
            <p><strong>Track 4</strong></p>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="well text-center">
            <h4>Regional and Sectoral Case Studies</h4>
            <p><strong>Track 5</strong></p>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-info text-center">
            <h2>Join Our Community</h2>
            <p class="lead">
                Be part of a conference led by world-renowned experts and contribute to the future of digital economy and data innovation.
            </p>
            <p>
                <a href="{{ route('submission') }}" class="btn btn-primary btn-large">Submit Your Paper</a>
                <a href="{{ route('contact') }}" class="btn btn-default btn-large">Contact Us</a>
            </p>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('title', 'Call for Papers - DESDI 2025')
@section('description', 'Submit your research papers to DESDI 2025. We invite original contributions in digital economy, smart business, data innovation, and emerging technologies. Deadline: September 03, 2025.')

@section('content')
<!-- Page Header -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Call for Papers</div>
        </div>
        <div class="text-center">
            <p class="lead">
                Submit your original research and be part of the premier international conference on digital economy and data innovation
            </p>
        </div>
    </div>
</div>

<!-- Important Dates -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Important Dates</div>
        </div>
        <p class="text-center lead">Mark these important deadlines in your calendar</p>
    </div>
</div>

<div class="row-fluid">
    <div class="span4">
        <div class="well text-center">
            <h4>Paper Submission Deadline</h4>
            <h2 class="text-info">September 03, 2025</h2>
            <p>Submit your full papers and abstracts</p>
        </div>
    </div>
    <div class="span4">
        <div class="well text-center">
            <h4>Notification of Acceptance</h4>
            <h2 class="text-success">September 25, 2025</h2>
            <p>Authors will be notified of acceptance</p>
        </div>
    </div>
    <div class="span4">
        <div class="well text-center">
            <h4>Registration Deadline</h4>
            <h2 class="text-warning">October 03, 2025</h2>
            <p>Registration deadline for accepted papers</p>
        </div>
    </div>
</div>

<!-- Topics of Interest -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Topics of Interest</div>
        </div>
        <p class="text-center lead">
            We welcome original research papers in the following areas of digital economy and data innovation
        </p>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="well">
            <h4>Digital Economy, Governance & Policy</h4>
            <ul>
                <li>Digital economic transformation and growth models</li>
                <li>E-governance, digital inclusion, and sustainable development</li>
                <li>Innovation policy and digital competitiveness</li>
                <li>Smart regulation and data governance frameworks</li>
                <li>Economic resilience and digital infrastructure investment</li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <h4>Smart Business Models and Innovation</h4>
            <ul>
                <li>Smart business ecosystems and digital entrepreneurship</li>
                <li>Strategic management in the age of AI and data</li>
                <li>Business model innovation and transformation frameworks</li>
                <li>Project, quality, and risk management in digital enterprises</li>
                <li>Sustainable and circular business models</li>
            </ul>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="well">
            <h4>Data Innovation and Analytics</h4>
            <ul>
                <li>Big data analytics for business decision-making</li>
                <li>Predictive analytics and forecasting models</li>
                <li>Business intelligence and visualization tools</li>
                <li>Data-driven marketing and consumer insights</li>
                <li>Customer relationship analytics (CRM, CLV, RFM models)</li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <h4>Emerging Technologies and Applications</h4>
            <ul>
                <li>Machine learning, deep learning, and hybrid architectures</li>
                <li>Natural language processing and sentiment analysis</li>
                <li>Computer vision and multimodal AI applications</li>
                <li>Generative AI, ethics, and responsible innovation</li>
                <li>Blockchain, fintech, and digital currencies</li>
            </ul>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <div class="well">
            <h4>Regional and Sectoral Case Studies</h4>
            <ul>
                <li>Digital economy in emerging markets and developing countries</li>
                <li>Smart cities and urban innovation ecosystems</li>
                <li>E-commerce and retail transformation in Africa, MENA, and Asia</li>
                <li>Digital tourism and hospitality management</li>
                <li>Agritech, fintech, and edtech innovation ecosystems</li>
            </ul>
        </div>
    </div>
</div>

<!-- Submission Guidelines -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Submission Guidelines</div>
        </div>
        <p class="text-center lead">
            Please follow these guidelines when preparing your paper submission
        </p>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="well">
            <h4>Paper Format</h4>
            <ul>
                <li>Maximum 8 pages including references and appendices</li>
                <li>IEEE conference format (double-column)</li>
                <li>PDF format only</li>
                <li>Single-blind review process</li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <h4>Review Process</h4>
            <ul>
                <li>Each paper reviewed by at least 3 experts</li>
                <li>Originality and technical contribution</li>
                <li>Clarity and presentation quality</li>
                <li>Relevance to conference topics</li>
            </ul>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="well">
            <h4>Submission Requirements</h4>
            <ul>
                <li>Original, unpublished work</li>
                <li>Clear abstract (150-250 words)</li>
                <li>Keywords (3-5 relevant terms)</li>
                <li>Complete author information</li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <h4>Publication</h4>
            <p>
                Accepted papers will be published in the Springer Proceedings in Business and Economics (SPBE) and submitted for indexing in Scopus and Web of Science.
            </p>
            <ul>
                <li>Springer Proceedings in Business and Economics</li>
                <li>Scopus and Web of Science indexing</li>
                <li>International Journal of Intelligent Management and Data Systems</li>
                <li>The International Journal of Economic and Management Decisions</li>
            </ul>
        </div>
    </div>
</div>

<!-- Call to Action -->
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-success text-center">
            <h2>Ready to Submit Your Paper?</h2>
            <p class="lead">
                Join the conversation and contribute to the future of digital economy and data innovation. Submit your research paper today.
            </p>
            <p>
                <a href="{{ route('submission') }}" class="btn btn-primary btn-large">Submit Your Paper</a>
                <a href="{{ route('contact') }}" class="btn btn-default btn-large">Contact Us</a>
            </p>
        </div>
    </div>
</div>
@endsection
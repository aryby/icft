@extends('layouts.app')

@section('title', 'Paper Submission - DESDI 2026')
@section('description',
    'Submit your research paper to DESDI 2026. Follow our submission guidelines and upload your
    paper through our secure submission system. Deadline: December 31, 2025.')

@section('content')
    <!-- Page Header -->
    <div class="row-fluid">
        <div class="span12">
            <div class="titleborder">
                <div>Paper Submission</div>
            </div>

        </div>
    </div>
    <ul>Authors are invited to choose between two submission options:
        <li><span class="alert-dark">Abstract Submission</span></li>
        <li>Authors who wish to present their research at the conference without pursuing publication are encouraged to
            submit an abstract by December 31, 2025. This option is ideal for those interested in sharing their findings
            and receiving feedback from peers, without the requirement to publish in the conference proceedings.
        </li>
        <li>
            <span class="alert-dark">Full Paper Submission</span>
        </li>
        <li>
        </li>Authors seeking publication opportunities must submit a full paper by December 31, 2025. All submissions will
        undergo a rigorous peer-review process to ensure academic quality and thematic relevance.
    </ul>
    <ul>

        <li>
            <strong> Accepted papers will have the opportunity to be published in one of the following outlets:
            </strong>
            <ol style="list-style: none">
                <li>
                    - Springer Proceedings in Business and Economics
                </li>
                <li>
                    - International Journal of Intelligent Management and Data Systems
                </li>
                <li>
                    - The International Journal of Economic and Management Decisions
                </li>
            </ol>
        </li>

    </ul>
    Scientific Committee will recommend the most suitable publication outlet for each accepted paper based on its topic and
    quality. Authors will be kept informed throughout the review and selection process.
    We look forward to your contributions and to welcoming you to DESDI'26
    <!-- Submission Form -->
    <div class="row-fluid">
        <div class="span12">
            <div class="titleborder">
                <div>Submit Your Paper</div>
            </div>
        </div>
    </div>

    <div class="row-fluid">
        <div class="span12">
            <form class="form-horizontal" action="{{ route('submission.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Paper Information -->
                <div class="well">
                    <h3>Paper Information</h3>
                    <div class="control-group">
                        <label class="control-label" for="submission_option">Submission Option *</label>
                        <div class="controls">
                            <select id="submission_option" name="submission_option" class="input-xlarge" required>
                                <option value="">Select an Option</option>
                                <option value="full_submission">Full Submission</option>
                                <option value="abstract_submission">Abstract Submission</option>
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="title">Paper Title *</label>
                        <div class="controls">
                            <input type="text" id="title" name="title" class="input-xlarge" required
                                placeholder="Enter your paper title">
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
                            <textarea id="abstract" name="abstract" rows="4" class="input-xlarge" required
                                placeholder="Enter your abstract (150-250 words)"></textarea>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="keywords">Keywords *</label>
                        <div class="controls">
                            <input type="text" id="keywords" name="keywords" class="input-xlarge" required
                                placeholder="Enter 3-5 keywords separated by commas">
                        </div>
                    </div>
                </div>

                <!-- Author Information -->
                <div class="well">
                    <h3>Author Information</h3>

                    <div class="control-group">
                        <label class="control-label" for="name">Full Name *</label>
                        <div class="controls">
                            <input type="text" id="name" name="name" class="input-xlarge" required
                                placeholder="Enter your full name">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="email">Email Address *</label>
                        <div class="controls">
                            <input type="email" id="email" name="email" class="input-xlarge" required
                                placeholder="Enter email address">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="affiliation">Affiliation *</label>
                        <div class="controls">
                            <input type="text" id="affiliation" name="affiliation" class="input-xlarge" required
                                placeholder="Enter your institution/organization">
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
                            <input type="tel" id="phone" name="phone" class="input-xlarge"
                                placeholder="Enter phone number">
                        </div>
                    </div>
                </div>

                <!-- File Upload -->
                <div class="well">
                    <h3>Paper Upload</h3>
                    <div class="control-group">
                        <label class="control-label" for="file">Upload Paper *</label>
                        <div class="controls">
                            <input type="file" id="file" name="file" accept=".pdf" required>
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
                                I confirm that this paper is original and has not been published elsewhere, nor is it
                                currently under review by another conference or journal. *
                            </label>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <input type="checkbox" name="copyright" required>
                                I agree to transfer copyright to DESDI 2026 if the paper is accepted for publication. *
                            </label>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="controls">
                            <label class="checkbox">
                                <input type="checkbox" name="attendance" required>
                                I understand that at least one author must register and attend the conference to present the
                                paper if accepted. *
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

@endsection

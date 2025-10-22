@extends('layouts.app')

@section('title', 'Registration - DESDI 2025')
@section('description', 'Register for DESDI 2025 - International Conference on Digital Economy Smart Business & Data Innovation. Early registration available until October 1st, 2025.')

@section('content')
<!-- Page Header -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Conference Registration</div>
        </div>
        <div class="text-center">
            <p class="lead">
                Welcome to the registration portal for International Conference on Digital Economy, Smart Business & Data Innovation (DESDI'25). Please complete the form below to register as a presenter or participant.
            </p>
            <p>
                To confirm your registration, kindly ensure the registration fee is paid and a payment receipt is sent to: <strong>desdi25@desdi.org</strong>
            </p>
            <p class="text-success"><strong>We look forward to your participation!</strong></p>
        </div>
    </div>
</div>

<!-- Registration Fees -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Registration Fees</div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Registration Type</th>
                    <th class="text-center">Early Registration<br><small>Before October 1st, 2025</small></th>
                    <th class="text-center">Late Registration<br><small>After October 1st, 2025</small></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Student paper registration</strong></td>
                    <td class="text-center"><strong>70 € / 70 USD</strong></td>
                    <td class="text-center"><strong>90 € / 90 USD</strong></td>
                </tr>
                <tr>
                    <td><strong>Professional / Researcher paper registration</strong></td>
                    <td class="text-center"><strong>90 € / 90 USD</strong></td>
                    <td class="text-center"><strong>120 € / 120 USD</strong></td>
                </tr>
                <tr>
                    <td><strong>Extra Paper registration</strong></td>
                    <td class="text-center"><strong>60 € / 60 USD</strong></td>
                    <td class="text-center"><strong>80 € / 80 USD</strong></td>
                </tr>
                <tr>
                    <td><strong>Abstract registration</strong></td>
                    <td class="text-center"><strong>30 € / 30 USD</strong></td>
                    <td class="text-center"><strong>40 € / 40 USD</strong></td>
                </tr>
                <tr>
                    <td><strong>Authors Attending registration</strong></td>
                    <td class="text-center"><strong>20 € / 20 USD</strong></td>
                    <td class="text-center"><strong>30 € / 30 USD</strong></td>
                </tr>
            </tbody>
        </table>
        <p class="text-center"><strong>Exchange rate: 1 € ≈ 10 MAD</strong></p>
    </div>
</div>

<!-- Conference Fees Coverage -->
<div class="row-fluid">
    <div class="span12">
        <div class="well">
            <h3>Conference Fees Cover:</h3>
            <ul>
                <li>Access to all conference sessions</li>
                <li>Publication of your paper in the official journals</li>
                <li>One printed and one digital copy of the journals</li>
                <li>Certificate of participation</li>
                <li>Certificate of Publication</li>
                <li>Publication fees</li>
            </ul>
        </div>
    </div>
</div>

<!-- Bank Information -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Bank Information</div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span6">
        <div class="well">
            <h4>Payment Details</h4>
            <p><strong>Bank Name:</strong> CIH Bank</p>
            <p><strong>Beneficiary:</strong> Moroccan Association for Smart Systems, Innovation and Research (MASSIR)</p>
            <p><strong>IBAN:</strong> 011 330 0000142000001546 25</p>
            <p><strong>SWIFT Code:</strong> CIHMAMC</p>
            <p><strong>Reference:</strong> DESDI'25</p>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <h4>Registration Payment</h4>
            <p>After completing your payment, please email your payment receipt to <strong>desdi25@desdi.org</strong> with your full name and submission ID (if applicable).</p>
            <p><strong>Your registration will be confirmed once payment is received. Thank you!</strong></p>
        </div>
    </div>
</div>

<!-- Registration Form -->
<div class="row-fluid">
    <div class="span12">
        <div class="titleborder">
            <div>Registration Form</div>
        </div>
    </div>
</div>

<div class="row-fluid">
    <div class="span12">
        <form class="form-horizontal">
            <div class="control-group">
                <label class="control-label" for="fullName">Full Name *</label>
                <div class="controls">
                    <input type="text" id="fullName" name="fullName" class="input-xlarge" required>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="email">Email Address *</label>
                <div class="controls">
                    <input type="email" id="email" name="email" class="input-xlarge" required>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="affiliation">Institution/Affiliation *</label>
                <div class="controls">
                    <input type="text" id="affiliation" name="affiliation" class="input-xlarge" required>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="country">Country *</label>
                <div class="controls">
                    <input type="text" id="country" name="country" class="input-xlarge" required>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="registrationType">Registration Type *</label>
                <div class="controls">
                    <select id="registrationType" name="registrationType" class="input-xlarge" required>
                        <option value="">Select Registration Type</option>
                        <option value="student">Student paper registration</option>
                        <option value="professional">Professional / Researcher paper registration</option>
                        <option value="extra">Extra Paper registration</option>
                        <option value="abstract">Abstract registration</option>
                        <option value="attending">Authors Attending registration</option>
                    </select>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="paperId">Paper ID (if applicable)</label>
                <div class="controls">
                    <input type="text" id="paperId" name="paperId" class="input-xlarge">
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="dietary">Dietary Requirements</label>
                <div class="controls">
                    <textarea id="dietary" name="dietary" class="input-xlarge" rows="3"></textarea>
                </div>
            </div>
            
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" name="terms" required> I agree to the terms and conditions *
                    </label>
                </div>
            </div>
            
            <div class="control-group">
                <div class="controls">
                    <button type="submit" class="btn btn-primary btn-large">Submit Registration</button>
                    <button type="reset" class="btn btn-default btn-large">Reset Form</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Further Inquiry -->
<div class="row-fluid">
    <div class="span12">
        <div class="alert alert-info">
            <h4>Further Inquiry</h4>
            <p>For any other related information or inquiry regarding the payment, the transaction methods, or difficulties in the registration process, the authors should send an email as soon as possible to <strong>desdi25@desdi.org</strong> with PaperID, Paper Title, Author(s), and Affiliation included.</p>
        </div>
    </div>
</div>
@endsection
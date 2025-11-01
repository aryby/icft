@extends('layouts.app')

@section('title', 'Author Instructions - DESDI 2026')
@section('description',
    'Detailed instructions for authors submitting papers to DESDI 2026. Learn about paper
    preparation, formatting requirements, peer review process, and submission guidelines.')

@section('content')
    <!-- Page Header -->
    <div class="row-fluid">
        <div class="span12">
            <div class="titleborder">
                <div>Instructions for Authors</div>
            </div>
        </div>
    </div>

    <div class="row-fluid top0">
        <div class="alert-info">
            <h4 class="alert-info mb-0 pb-0"><strong>| Papers Preparation</strong></h4>
        </div>
    </div>


    
    All materials submitted to DESDI'26 Conference must be original, unpublished research that is not currently under
    review
    for any other conference or journal. Papers not following these guidelines may be rejected without review. Also,
    submissions received after the due date, exceeding the length limit, or not appropriately structured may also not be
    considered.
    <br>
    <br>
   
    

    <div class="row-fluid top0">
        
        <div class="panel1">
            <div class="span11">
                <span class="alert-dark bold">Full papers</span> must be in English and submitted in word format.
     Each paper must be in the range of 10 - 20 pages. <br>
     <span class="alert-dark">Abstract </span> must be in English or French submitted in word format.
     <br>
                <strong>
                    The DESDI template for preparing a full paper and Abstract can be downloaded here :
                ( <a href="{{ asset('downloads/full_desdi_template.docx') }}">full paper template</a> / <a href="{{ asset('downloads/abstract_desdi_template.docx') }}">Abstract template</a>
                )
                </strong>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    
    <div class="row-fluid top0">
        <div class="alert-info">
            <h4 class="alert-info mb-0 pb-0"><strong>| Peer Review Process</strong></h4>
        </div>
        <ul class="uli">

            <li>The conference will check plagiarism for all articles before publication. 
                If plagiarism is observed by the
                scientific
                committee, peer reviewers, or staff members at any stage of the publication process, the author will be informed to
                rewrite the manuscript.
            </li>
            <li>
                If the submitted original manuscript is more than 20% plagiarized, the article will be rejected, and the same will
    be
    notified to the author.
            </li>
            <li>
                Paper content (unpublished work) must be original and relevant to one of the many conference topics.

            </li>
            <li>
                The acceptance decisions will take into account paper novelty, technical depth, elegance, and practical and
                theoretical
                impact.
            </li>
            <li>
                Each paper will be reviewed by two SC members.

            </li>
            <li>
                The acceptance decisions will take into account originality, practical & theoretical impact, and paper presentation.

            </li>
            <li>
 
                Changes cannot be made during the review process. If accepted, minor revisions may be made prior to final
                submission.
            </li>
        </ul>
    </div>
   
@endsection

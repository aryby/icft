<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    /**
     * Display the submission page.
     */
    public function index()
    {
        return view('submission');
    }
}

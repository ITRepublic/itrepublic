<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function getJob() {
        return view('job')->withTitle('Job');
    }

    public function getJobDetail() {
        return view('job-detail')->withTitle('Job Detail');
    }

    public function getJobSearch() {
        return view('job-search')->withTitle('Job Search');
    }
}

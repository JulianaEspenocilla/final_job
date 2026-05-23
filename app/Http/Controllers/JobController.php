<?php

namespace App\Http\Controllers;

use App\Models\ListJobs;

class JobController extends Controller
{
    
    public function index()
    {
        $jobs = ListJobs::all();
        return view('jobs', [
            'jobs' => $jobs
        ]);
    }

    
    public function show($id)
    {
        $job = ListJobs::find($id);
        return view('job_detail', [
            'job' => $job
        ]);
    }
}

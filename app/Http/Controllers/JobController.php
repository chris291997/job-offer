<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all();
        return view('jobs.index', compact('jobs'));
    }

    public function store(Request $request)
    {
        $job = Job::create($request->all());

        // Dispatch the event
        event(new JobPosted($job));

        return redirect()->route('jobs.index');
    }
}
<!-- resources/views/jobs/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Job Listings</h1>
        <ul>
            @foreach ($jobs as $job)
                <li>{{ $job->name }}</li>
                <!-- Display other job details as needed -->
            @endforeach
        </ul>
    </div>
@endsection
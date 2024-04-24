<!-- resources/views/job_offers.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">External Job Offers</h1>

        @foreach($externalJobOffers as $offer)
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">{{ $offer['title'] }}</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Occupation:</strong> {{ $offer['occupation'] }}</p>
                            <p><strong>Occupation Category:</strong> {{ $offer['occupationCategory'] }}</p>
                            <p><strong>Subcompany:</strong> {{ $offer['subcompany'] }}</p>
                            <p><strong>Office:</strong> {{ $offer['office'] }}</p>
                            <p><strong>Department:</strong> {{ $offer['department'] }}</p>
                            <p><strong>Recruiting Category:</strong> {{ $offer['recruitingCategory'] }}</p>
                        </div>
                        <div class="col-md-6">
                            @foreach($offer['descriptions'] as $description)
                                <div class="job-description mb-3">
                                    <h4>{{ $description['header'] }}</h4>
                                    <p>{!! $description['content'] !!}</p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Employment Type:</strong> {{ $offer['employmentType'] }}</p>
                            <p><strong>Seniority:</strong> {{ $offer['seniority'] }}</p>
                            <p><strong>Schedule:</strong> {{ $offer['schedule'] }}</p>
                            <p><strong>Years of Experience:</strong> {{ $offer['yearsOfExperience'] }}</p>
                            <p><strong>Keywords:</strong> {{ $offer['keywords'] }}</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="{{ $offer['link'] }}" class="btn btn-primary">Full job posting</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection


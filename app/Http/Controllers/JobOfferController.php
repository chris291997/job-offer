<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use SimpleXMLElement;

class JobOfferController extends Controller
{
    public function index()
    {
        $response = Http::get('https://mrge-group-gmbh.jobs.personio.de/xml');

        $xmlData = $response->body();
        $jobs = $this->parseXmlData($xmlData);

        return view('job_offers', ['externalJobOffers' => $jobs]);
    }

    private function parseXmlData($xmlData)
    {
        $xml = new SimpleXMLElement($xmlData);
        $jobs = [];
    
        foreach ($xml->position as $position) {
            $descriptions = [];
    
            // Loop through all jobDescriptions for the current position
            foreach ($position->jobDescriptions->jobDescription as $jobDescription) {
                $description = [
                    'header' => (string) $jobDescription->name,
                    'content' => (string) $jobDescription->value,
                ];
                $descriptions[] = $description;
            }
    
            $job = [
                'title' => (string) $position->name,
                'employmentType' => (string) $position->employmentType,
                'seniority' => (string) $position->seniority,
                'schedule' => (string) $position->schedule,
                'yearsOfExperience' => (string) $position->yearsOfExperience,
                'keywords' => (string) $position->keywords,
                'occupation' => (string) $position->occupation,
                'occupationCategory' => (string) $position->occupationCategory,
                'subcompany' => (string) $position->subcompany,
                'office' => (string) $position->office,
                'department' => (string) $position->department,
                'recruitingCategory' => (string) $position->recruitingCategory,
                'descriptions' => $descriptions,
                'link' => (string) $position->id,
            ];
    
            $jobs[] = $job;
        }
    
        return $jobs;
    }
    
}

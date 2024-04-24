<?php

namespace App\Events;

use App\Models\Job;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class JobPosted
{
    use Dispatchable, SerializesModels;

    public $job;

    public function __construct(Job $job)
    {
        $this->job = $job;
    }
}
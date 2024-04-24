<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'id',
        'subcompany',
        'office',
        'department',
        'recruitingCategory',
        'name',
        'jobDescriptions',
        'employmentType',
        'seniority',
        'schedule',
        'yearsOfExperience',
        'keywords',
        'occupation',
        'occupationCategory',
    ];
}
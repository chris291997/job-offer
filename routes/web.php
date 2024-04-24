<?php

// routes/web.php

use App\Http\Controllers\JobController;
use App\Http\Controllers\JobOfferController;

Route::resource('jobs', JobController::class)->only(['index', 'store']);
Route::get('/job-offers', [JobOfferController::class, 'index'])->name('job_offers');

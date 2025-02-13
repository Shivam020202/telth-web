<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


// Main Pages
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
}); 

// Solutions Routes
Route::prefix('solutions')->name('solutions.')->group(function () {
    Route::get('/', [PageController::class, 'solutions'])->name('index');
    Route::get('/care2home', [PageController::class, 'care2home'])->name('care2home');
    Route::get('/health-card', [PageController::class, 'healthCard'])->name('health-card');
    Route::get('/smart-hubs', [PageController::class, 'smartHubs'])->name('smart-hubs');
    Route::prefix('diagnostics')->name('diagnostics.')->group(function () {
        Route::get('/', [PageController::class, 'diagnostics'])->name('index');
        Route::get('/dia-lab', [PageController::class, 'diaLab'])->name('dia-lab');
        Route::get('/poct', [PageController::class, 'poct'])->name('poct');
        Route::get('/iomt', [PageController::class, 'iomt'])->name('iomt');
    });
});

// Healthcare Services Routes
Route::prefix('care')->name('care.')->group(function () {
    Route::get('/', [PageController::class, 'care'])->name('index');
    Route::get('/services', [PageController::class, 'services'])->name('services');
    Route::get('/plans', [PageController::class, 'plans'])->name('plans');
    Route::get('/resources', [PageController::class, 'resources'])->name('resources');
});

// Digital Health Routes
Route::prefix('digital-health')->name('digital-health.')->group(function () {
    Route::get('/', [PageController::class, 'digitalHealth'])->name('index');
    Route::get('/patient', [PageController::class, 'patientPortal'])->name('patient');
    Route::get('/provider', [PageController::class, 'providerPortal'])->name('provider');
    Route::get('/telemedicine', [PageController::class, 'telemedicine'])->name('telemedicine');
    Route::get('/apps', [PageController::class, 'apps'])->name('apps');
});

// Research & Innovation Routes
Route::prefix('research')->name('research.')->group(function () {
    Route::get('/', [PageController::class, 'research'])->name('index');
    Route::get('/clinical', [PageController::class, 'clinicalResearch'])->name('clinical');
    Route::get('/technology', [PageController::class, 'technologyResearch'])->name('technology');
    Route::get('/studies', [PageController::class, 'studies'])->name('studies');
});

// Other Important Routes from Sitemap
Route::prefix('smart-solutions')->name('smart-solutions.')->group(function () {
    Route::get('/', [PageController::class, 'smartSolutions'])->name('index');
    Route::get('/diagnostic', [PageController::class, 'diagnostic'])->name('diagnostic');
    Route::get('/remote', [PageController::class, 'remote'])->name('remote');
});

Route::prefix('mobile-healthcare')->name('mobile-healthcare.')->group(function () {
    Route::get('/', [PageController::class, 'mobileHealthcare'])->name('index');
    Route::get('/mobilemed', [PageController::class, 'mobilemed'])->name('mobilemed');
    Route::get('/air-ambulance', [PageController::class, 'airAmbulance'])->name('air-ambulance');
});

// Financial Services Routes
Route::prefix('financial')->name('financial.')->group(function () {
    Route::get('/', [PageController::class, 'financial'])->name('index');
    Route::get('/health-card', [PageController::class, 'healthCard'])->name('health-card');
    Route::get('/insurance', [PageController::class, 'insurance'])->name('insurance');
    Route::get('/payments', [PageController::class, 'payments'])->name('payments');
});

// Community Routes
Route::prefix('community')->name('community.')->group(function () {
    Route::get('/', [PageController::class, 'community'])->name('index');
    Route::get('/patient', [PageController::class, 'communityPatient'])->name('patient');
    Route::get('/provider', [PageController::class, 'communityProvider'])->name('provider');
    Route::get('/knowledge', [PageController::class, 'knowledge'])->name('knowledge');
});

// Support Routes
Route::prefix('support')->name('support.')->group(function () {
    Route::get('/', [PageController::class, 'support'])->name('index');
    Route::get('/technical', [PageController::class, 'technical'])->name('technical');
    Route::get('/customer', [PageController::class, 'customer'])->name('customer');
    Route::get('/resources', [PageController::class, 'supportResources'])->name('resources');
});
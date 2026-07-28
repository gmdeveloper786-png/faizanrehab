<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\SitemapController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about-us', function () {
    return view('pages.about-us');
})->name('about-us');
Route::get('/appointment', function () {
    return view('pages.appointment');
})->name('appointment');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');

Route::get('/our-therapists', function () {
    return view('pages.therapists');
})->name('our-therapists');

Route::get('/services', function () {
    return view('pages.services.services');
})->name('services');

Route::get('/remedial-therapy', function () {
    return view('pages.services.remedial-therapy');
})->name('remedial-therapy');

Route::get('/speech-therapy', function () {
    return view('pages.services.speech-therapy');
})->name('speech-therapy');

Route::get('/occupational-therapy', function () {
    return view('pages.services.occupational-therapy');
})->name('occupational-therapy');

Route::get('/physiotherapy', function () {
    return view('pages.services.physiotherapy');
})->name('physiotherapy');

Route::get('/behavioral-therapy', function () {
    return view('pages.services.behavioral-therapy');
})->name('behavioral-therapy');

Route::get('/school-readiness-program', function () {
    return view('pages.services.school-readiness-program');
})->name('school-readiness-program');

Route::get('/quran-teaching', function () {
    return view('pages.services.quran-teaching');
})->name('quran-teaching');

Route::get('/parental-counselling', function () {
    return view('pages.services.parental-counselling');
})->name('parental-counselling');

Route::get('/group-therapy', function () {
    return view('pages.services.group-therapy');
})->name('group-therapy');

// Contact Form Submission Route with Rate Limiting
Route::post('/contact-submit', [ContactController::class, 'submit'])
    ->middleware('throttle:contact-form')
    ->name('contact.submit');

// Appointment Form Submission Route with Rate Limiting
Route::post('/appointment-submit', [AppointmentController::class, 'submit'])
    ->middleware('throttle:appointment-form')
    ->name('appointment.submit');

// Catch-all for invalid URLs
Route::fallback(function () {
    abort(404);
});

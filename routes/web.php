<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Models\News;
use App\Http\Controllers\FeedbackController;
use App\Models\Service;
use App\Http\Controllers\ServiceController;


Route::get('/', function () {
    $news = News::orderByDesc('id')->take(3)->get();
    $services = Service::orderByDesc('id')->take(3)->get();
    return view('index', ['news' => $news], ['services' => $services]);
})->name('index');

Route::get('/services', [ServiceController::class, 'OpenServices'])->name('services');

Route::get('/news', [NewsController::class, 'OpenNews'])->name('news');
Route::get('/news/{new}', [NewsController::class, 'ShowNews'])->name('show.news');

Route::post('/send', [FeedbackController::class, 'SendFeedback'])->name('send');

Route::get('/contacts', function () { return view('contacts');})->name('contacts');

Route::get('/about', function () { return view('about');})->name('about');

Route::get('/works', function () { return view('works');})->name('works');

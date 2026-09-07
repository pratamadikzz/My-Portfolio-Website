<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

Route::post('/contact', [ContactController::class, 'send'])
    ->name('contact.send');

Route::post('/projects/{slug}/like', [ProjectController::class, 'like'])
    ->name('projects.like');

Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])
    ->name('projects.show');


Route::get('/', function () {
    return view('welcome');
});

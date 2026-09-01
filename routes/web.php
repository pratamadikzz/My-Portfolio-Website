<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

Route::post('/projects/{slug}/like', [ProjectController::class, 'like'])
    ->name('projects.like');
    
Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects.index');

Route::get('/projects/{slug}', [ProjectController::class, 'show'])
    ->name('projects.show');


Route::get('/projects', function () {
    return view('projects');
})->name('projects');


Route::get('/', function () {
    return view('welcome');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Create;
 use App\Http\Livewire\ShowProfile;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Info page
Route::get('/', function () {
    return view('index');
})->name('home');

// Dashboard
Route::middleware(['auth:sanctum', 'verified'])->group(function() {
    // Dashboard page
    Route::get('/dashboard', Posts::class)->name('dashboard');

    // User page
    Route::get('profile/{user}', [ProfileController::class, 'index'])->name('profile');
    Route::get('profile/{user}/edit', [ProfileController::class, 'profileEdit'])->name('profile-edit');
});

// Post page
Route::get('post', Posts::class)->name('post');

// Create page
Route::get('create', Create::class)->name('create');
Route::post('/store', [Create::class, 'store'])->name('store');
Route::get('/units/{id}', [Create::class, 'show'])->name('video');
Route::get('/units/{id}', Posts::class)->name('video');

// Storage link
Route::get('/foo', function () {
    Artisan::call('storage:link');
});

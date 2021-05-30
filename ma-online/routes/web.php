<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Create;
use App\Http\Controllers\Profile;

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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', Posts::class , function () {
    return view('dashboard');
})->name('dashboard');

// User page
Route::get('user/profile', [Profile::class, 'userProfile'])->name('user/profile');

// Post page
Route::get('post', Posts::class)->name('post');


// Create page
Route::get('create', Create::class)->name('create');
Route::post('/store', [Create::class, 'store'])->name('store');

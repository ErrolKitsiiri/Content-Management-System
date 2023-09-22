<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Livewire\Admin;
use App\Livewire\Admin;
use App\Livewire\Admin\Dashboard;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    // Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');

    //Dashboard
    Route::get('/dashboard', Admin\Dashboard::class)->name('admin.dashboard');

    //Testimonials
    Route::prefix('testimonials')->group(function() {
        Route::get('/', Admin\Testimonials\Index::class)->name('admin.testimonials.index');
        Route::get('/create', Admin\Testimonials\Create::class)->name('admin.testimonials.create');
        Route::get('/{id}/edit', Admin\Testimonials\Edit::class)->name('admin.testimonials.edit');
    });

    //Clients
    Route::prefix('clients')->group(function() {
        Route::get('/', Admin\Clients\Index::class)->name('admin.clients.index');
        Route::get('/create', Admin\Clients\Create::class)->name('admin.clients.create');
        Route::get('/{id}/edit', Admin\Clients\Edit::class)->name('admin.clients.edit');
    });
    
    //Users
    Route::prefix('users')->group(function() {
        Route::get('/', Admin\Users\Index::class)->name('admin.users.index');
        Route::get('/create', Admin\Users\Create::class)->name('admin.users.create');
        Route::get('/{id}/edit', Admin\Users\Edit::class)->name('admin.users.edit');
    });
});




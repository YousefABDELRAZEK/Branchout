<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Route for selecting a template (if necessary)

// Routes for authenticated users only (Link Management)
Route::middleware(['auth'])->group(function () {
    Route::get('/Select-Template', function () {
        return view('temp');
    })->name('temp');
    $templates = ['LuxeDark', 'Template2', 'Template3'];

    foreach ($templates as $template) {
        // Route for listing links with a specific template
        Route::get("/{$template}", [LinkController::class, 'index'])
            ->name("links.index.{$template}")
            ->defaults('template', $template);
    }
    Route::get('/LuxeDark', [LinkController::class, 'index'])->name('links.index')->defaults('template', 'template1');
     // List all links for the user
    Route::get('/links/create', [LinkController::class, 'create'])->name('links.create'); // Show form to create a new link
    Route::post('/links', [LinkController::class, 'store'])->name('links.store'); // Store a new link
    Route::get('/links/{link}/edit', [LinkController::class, 'edit'])->name('links.edit'); // Edit a specific link
    Route::put('/links/{link}', [LinkController::class, 'update'])->name('links.update'); // Update a specific link
    Route::delete('/links/{link}', [LinkController::class, 'destroy'])->name('links.destroy'); // Delete a specific link
});

// Authentication Routes
// Register
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

// Login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

// Logout
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Profile Route (Optional, if using ProfileController)
Route::get('/profile', [ProfileController::class, 'show'])
    ->middleware('auth')
    ->name('profile.show');

    require __DIR__.'/auth.php';

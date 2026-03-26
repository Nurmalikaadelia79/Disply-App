<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\CaseStudyController;
use App\Http\Controllers\BlogController as PublicBlogController;
use App\Models\Blog;

Route::get('/', function () {
    $blogs = Blog::where('status', 'published')
                 ->latest()
                 ->take(4) 
                 ->get();
    
    return view('home', compact('blogs'));
})->name('home');

// Public Pages lainnya
Route::view('/about', 'about');
Route::view('/blog', 'blog');
Route::view('/service', 'service');
Route::view('/product/iwb', 'product.iwb');
Route::view('/product/digital-signage', 'product.digital-signage');
Route::view('/product/kiosk', 'product.kiosk');

// Use Case Pages
Route::prefix('usecase')->group(function () {
    Route::view('/interactive-whiteboard', 'usecase.interactive-whiteboard');
    Route::view('/digital-signage', 'usecase.digital-signage');
    Route::view('/kiosk', 'usecase.kiosk');
});

Route::view('/partner', 'partner');
Route::view('/contact', 'contact');
Route::view('/demo', 'demo');

// Authenticated pages
Route::middleware(['auth'])->group(function () {
    Route::view('/dashboard', 'home')->name('dashboard');
});

// Admin pages
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Blog routes
    Route::prefix('blog')->name('blog.')->group(function () {
        Route::get('/', [AdminBlogController::class, 'index'])->name('index');
        Route::get('/create', [AdminBlogController::class, 'create'])->name('create');
        Route::post('/', [AdminBlogController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AdminBlogController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AdminBlogController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdminBlogController::class, 'destroy'])->name('destroy');
    });
    
    // Events routes
    Route::prefix('events')->name('events.')->group(function () {
        Route::get('/', [EventController::class, 'index'])->name('index');
        Route::get('/create', [EventController::class, 'create'])->name('create');
        Route::post('/', [EventController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [EventController::class, 'edit'])->name('edit');
        Route::put('/{id}', [EventController::class, 'update'])->name('update');
        Route::delete('/{id}', [EventController::class, 'destroy'])->name('destroy');
    });
    
    // Case Studies routes
    Route::prefix('casestudies')->name('casestudies.')->group(function () {
        Route::get('/', [CaseStudyController::class, 'index'])->name('index');
        Route::get('/create', [CaseStudyController::class, 'create'])->name('create');
        Route::post('/', [CaseStudyController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [CaseStudyController::class, 'edit'])->name('edit');
        Route::put('/{id}', [CaseStudyController::class, 'update'])->name('update');
        Route::delete('/{id}', [CaseStudyController::class, 'destroy'])->name('destroy');
    });
    
    // Analytics
    Route::get('/analytics', [DashboardController::class, 'analytics'])->name('analytics');
});

// Public Blog routes
Route::get('/blog', [PublicBlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [PublicBlogController::class, 'show'])->name('blog.show');

require __DIR__.'/auth.php';
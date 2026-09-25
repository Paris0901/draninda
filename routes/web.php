<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProtocolController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ContentController;

// Clean Executive Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/protocols', [ProtocolController::class, 'index'])->name('protocols');
Route::get('/innovations', [HomeController::class, 'innovations'])->name('innovations');
Route::get('/media', [HomeController::class, 'media'])->name('media');

// Named Route Aliases for smooth navigation
Route::get('/journey', fn() => redirect('/about#timeline'))->name('journey');
Route::get('/awards', fn() => redirect('/about#awards'))->name('awards');
Route::get('/tech-ai', fn() => redirect('/innovations#baya-ai'))->name('tech-ai');
Route::get('/research', fn() => redirect('/innovations#research'))->name('research');
Route::get('/movements', fn() => redirect('/innovations#movements'))->name('movements');

// Public API Endpoints
Route::get('/api/awards/filter', [HomeController::class, 'filterAwards'])->name('api.awards.filter');
Route::get('/api/research/search', [ResearchController::class, 'search'])->name('api.research.search');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// Admin Authentication Routes
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::get('/login', fn() => redirect()->route('admin.login'))->name('login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Admin Panel Routes (Protected by Auth)
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/settings', [ContentController::class, 'updateSettings'])->name('settings.update');

    // Milestones
    Route::get('/milestones', [ContentController::class, 'milestones'])->name('milestones');
    Route::post('/milestones', [ContentController::class, 'storeMilestone'])->name('milestones.store');
    Route::put('/milestones/{id}', [ContentController::class, 'updateMilestone'])->name('milestones.update');
    Route::delete('/milestones/{id}', [ContentController::class, 'deleteMilestone'])->name('milestones.delete');

    // Awards
    Route::get('/awards', [ContentController::class, 'awards'])->name('awards');
    Route::post('/awards', [ContentController::class, 'storeAward'])->name('awards.store');
    Route::put('/awards/{id}', [ContentController::class, 'updateAward'])->name('awards.update');
    Route::delete('/awards/{id}', [ContentController::class, 'deleteAward'])->name('awards.delete');

    // Research
    Route::get('/research', [ContentController::class, 'research'])->name('research');
    Route::post('/research', [ContentController::class, 'storeResearch'])->name('research.store');
    Route::put('/research/{id}', [ContentController::class, 'updateResearch'])->name('research.update');
    Route::delete('/research/{id}', [ContentController::class, 'deleteResearch'])->name('research.delete');

    // Media & Podcasts
    Route::get('/media', [ContentController::class, 'media'])->name('media');
    Route::post('/media', [ContentController::class, 'storeMedia'])->name('media.store');
    Route::put('/media/{id}', [ContentController::class, 'updateMedia'])->name('media.update');
    Route::delete('/media/{id}', [ContentController::class, 'deleteMedia'])->name('media.delete');
    Route::post('/media/{id}/toggle-featured', [ContentController::class, 'toggleMediaFeatured'])->name('media.toggle-featured');

    // Testimonials
    Route::get('/testimonials', [ContentController::class, 'testimonials'])->name('testimonials');
    Route::post('/testimonials', [ContentController::class, 'storeTestimonial'])->name('testimonials.store');
    Route::put('/testimonials/{id}', [ContentController::class, 'updateTestimonial'])->name('testimonials.update');
    Route::delete('/testimonials/{id}', [ContentController::class, 'deleteTestimonial'])->name('testimonials.delete');
    Route::post('/testimonials/{id}/toggle-active', [ContentController::class, 'toggleTestimonialActive'])->name('testimonials.toggle-active');

    // Photo Gallery
    Route::get('/gallery', [ContentController::class, 'gallery'])->name('gallery');
    Route::post('/gallery', [ContentController::class, 'storeGalleryPhoto'])->name('gallery.store');
    Route::put('/gallery/{id}', [ContentController::class, 'updateGalleryPhoto'])->name('gallery.update');
    Route::delete('/gallery/{id}', [ContentController::class, 'deleteGalleryPhoto'])->name('gallery.delete');
    Route::post('/gallery/{id}/toggle-featured', [ContentController::class, 'toggleGalleryPhotoFeatured'])->name('gallery.toggle-featured');

    // Inquiries
    Route::get('/inquiries', [ContentController::class, 'inquiries'])->name('inquiries');
    Route::put('/inquiries/{id}/status', [ContentController::class, 'updateInquiryStatus'])->name('inquiries.status');
    Route::delete('/inquiries/{id}', [ContentController::class, 'deleteInquiry'])->name('inquiries.delete');
});

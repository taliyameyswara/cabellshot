<?php

use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\EventTypeController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/mail', [HomeController::class, 'mail'])->name('mail');
Route::post('/mail', [HomeController::class, 'submit_mail'])->name('mail.submit');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserProfileController::class, 'profile'])->name('profile');
    Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::get('/change-password', [UserProfileController::class, 'showChangePasswordForm'])->name('change-password');
    Route::post('/change-password', [UserProfileController::class, 'changePassword'])->name('change-password.update');

    Route::get('/booking-history', [BookController::class, 'history'])->name('booking.history');
    Route::get('/bookings/create/{id}', [BookController::class, 'create'])->name('booking.create');
    Route::post('/booking/store/{id}', [BookController::class, 'store'])->name('booking.store');
    Route::get('/booking/view/{id}', [BookController::class, 'view'])->name('booking.view');
    Route::get('/cities', [CityController::class, 'index'])->name('cities');
});



// Admin routes
Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Profile
    Route::controller(ProfileController::class)->prefix('profile')->name('profile.')->group(function () {
        Route::get('/', 'profile')->name('index');
        Route::put('/', 'update')->name('update');
    });

    // Settings
    Route::controller(SettingsController::class)->prefix('settings')->name('settings.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'update')->name('update');
    });

    // Services
    Route::controller(ServiceController::class)->prefix('services')->name('services.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}/edit', 'edit')->name('edit');
        Route::put('/{id}',  'update')->name('update');
        Route::delete('/{id}',  'destroy')->name('destroy');
    });

    // Event Types
    Route::controller(EventTypeController::class)->prefix('event-types')->name('event-types.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::delete('/{id}', 'destroy')->name('destroy');
    });

    // Pages
    Route::controller(PageController::class)->prefix('pages')->name('pages.')->group(function () {
        Route::get('/about', 'about')->name('about');
        Route::put('/about', 'update_about')->name('update.about');

        Route::get('/contact', 'contact')->name('contact');
        Route::put('/contact', 'update_contact')->name('update.contact');
    });


    // Bookings
    Route::controller(BookingController::class)->prefix('bookings')->name('bookings.')->group(function () {
        Route::get('/all', 'all')->name('all');
        Route::get('/new', 'new')->name('new');
        Route::get('/approved', 'approved')->name('approved');
        Route::get('/cancelled', 'cancelled')->name('cancelled');
        Route::get('/detail/{id}', 'detail')->name('detail');
        Route::put('/update/{id}', 'update')->name('update');
    });


    // Reports and Search
    Route::get('/reports/dates', [ReportController::class, 'betweenDates'])->name('reports.dates');
    Route::get('/booking/search', [BookingController::class, 'search'])->name('booking.search');
});

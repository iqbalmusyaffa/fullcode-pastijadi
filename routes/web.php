<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KategoriServiceController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

// Rute untuk login, register, dan logout
Route::redirect('/','/home');
Route::get('/home', [LandingPageController::class, 'index'])->name('home');
Route::resource('about', AboutController::class);
Route::resource('servicesfe', ServicesController::class);
Route::resource('contact', ContactController::class);
Route::resource('blogfe', BlogsController::class);
Route::middleware('guest')->group(function () {
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.login');
Route::get('/registrasi', [AuthController::class, 'register'])->name('auth.register');
Route::post('/registrasi', [AuthController::class, 'store'])->name('auth.store');
})->withoutMiddleware([CheckRole::class]);;

Route::group(['middleware' => ['auth', 'checkrole:1,2']], function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('/redirect', [RedirectController::class, 'cek']);
});


// Route::middleware(['auth', 'checkrole:Admin'])->group(function () {
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    // Tempatkan rute yang membutuhkan autentikasi di sini
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::put('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

   // Kategori Routes
   Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
   Route::post('/kategori/create', [KategoriController::class, 'store'])->name('kategori.create');
   Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
   Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.delete');
   Route::get('/kategori/show/{id}', [KategoriController::class, 'show'])->name('kategori.show');

// Kategori service Routes
   Route::get('/kategori-service', [KategoriServiceController::class, 'index'])->name('kategori-service');
   Route::post('/kategori-service/create', [KategoriServiceController::class, 'store'])->name('kategori-service.create');
   Route::put('/kategori-service/{id}', [KategoriServiceController::class, 'update'])->name('kategori-service.update');
   Route::delete('/kategori-service/{id}', [KategoriServiceController::class, 'destroy'])->name('kategori-service.delete');
   Route::get('/kategori-service/show/{id}', [KategoriServiceController::class, 'show'])->name('kategori-service.show');

    // Artikel Routes
   // List all articles
   Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
   Route::post('/blog/create', [BlogController::class, 'store'])->name('blog.create');
   Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
   Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
   Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

});

// Service Routes
   Route::get('/services', [ServiceController::class, 'index'])->name('services');
   Route::post('/services/create', [ServiceController::class, 'store'])->name('services.create');
   Route::put('/services/{id}', [ServiceController::class, 'update'])->name('services.update');
   Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.delete');
   Route::get('/services/show/{id}', [ServiceController::class, 'show'])->name('services.show');


// contact
Route::resource('contact-be', ContactsController::class);
// change password
Route::post('/change-password', [UserController::class, 'changePassword'])->name('password.change');

Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

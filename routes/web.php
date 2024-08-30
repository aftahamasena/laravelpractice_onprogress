
<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/',[HomeController::class,'show']);
// Route::get('/',[HomeController::class,'find']);
// Route::get('/', [HomeController::class, 'add']);

Route::prefix('/auth')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->name('auth.login');
        Route::post('/login', 'action');
    });
    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'index')->name('auth.reg');
    });
});

Route::prefix('/admin')->group(function () {
    Route::controller(AdminDashboardController::class)->group(function () {
            Route::get('/', 'index')->name('admin.dashboard');
        });
});

Route::get('/', [UserHomeController::class, 'index'])->name('user.home');

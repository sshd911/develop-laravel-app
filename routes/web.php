<?php

use App\Http\Controllers\User\DashboardContrller;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserProfileController;
use App\Http\Controllers\User\userRequestController;
use App\Http\Controllers\User\UserTaskController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/dashboard', [DashboardContrller::class, 'index'])->name('dashboard');

Route::group(
    [
        'prefix' => 'user',
        'as' => 'user.',
        'middleware' => [
            'auth:web',
            'verified:user.auth.verification.notice',
        ],
    ],
    function () {
        // userTasks
        Route::group(['prefix' => 'userTask', 'as' => 'userTask.'], function () {
            Route::get('index', [UserTaskController::class, 'index'])->name('index');
        });
        // userProfiles
        Route::group(['prefix' => 'userProfile', 'as' => 'userProfile.'], function () {
            Route::get('index', [UserProfileController::class, 'index'])->name('index');
        });
        // userRequest
        Route::group(['prefix' => 'userRequest', 'as' => 'userRequest.'], function () {
            Route::get('index', [userRequestController::class, 'index'])->name('index');
        });
    }
);
require __DIR__.'/auth.php';

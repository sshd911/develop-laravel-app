<?php

use App\Http\Controllers\User\DashboardContrller;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserProfilesController;
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
    return view('welcome');
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
        // user index
        Route::get('index', [UserController::class, 'index'])->name('index');
        // userProfiles
        Route::group(['prefix' => 'userProfiles', 'as' => 'userProfiles.'], function () {
            Route::get('index', [UserProfilesController::class, 'index'])->name('index');
        });
    }
);
require __DIR__.'/auth.php';

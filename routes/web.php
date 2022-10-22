<?php

use App\Http\Controllers\User\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(
    [
        'prefix' => '',
        'as' => 'user.',
        'middleware' => [
            'auth:web',
            'verified:user.auth.verification.notice',
        ],
    ],
    function () {
        // Route::get('/', [UserController::class, 'inde x'])->name('dashboard');
        Route::get('index', [UserController::class, 'index'])->name('index');
        // Route::group(['prefix' => 'mypage', 'as' => 'mypage.',], function () {
        //     Route::get('/edit', [UserController::class, 'edit'])->name('edit');
        // });
    }
);
require __DIR__.'/auth.php';

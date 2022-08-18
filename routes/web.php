<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function () {
    return Inertia::render('frontPage');
});

Route::middleware([
    'auth:sanctum,web',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('User/Dash');
    })->name('dashboard');

    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])
    ->name('profile');
    Route::get('/account', [App\Http\Controllers\UserController::class, 'account'])
    ->name('account');
});






Route::group([ 'middleware'=> ['admin:admin']],
    
    function()
    {

        Route::get('/admin.login', [App\Http\Controllers\Adminlogin::class, 'adminlogin'])
        ->name( 'adminlogin' );
        
        Route::post('/admin.login', [App\Http\Controllers\Adminlogin::class, 'store'])
        ->name('adminlogin');

        Route::get('/admin.register', [App\Http\Controllers\Adminregister::class, 'create'])->name('doctor-register');
        
        Route::post('/admin.register',[App\Http\Controllers\Adminregister::class, 'store'])
        ->name('adminreg');
    }
        
    );


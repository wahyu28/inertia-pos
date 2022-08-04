<?php

use App\Http\Controllers\Apps\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return \Inertia\Inertia::render('Auth/Login');
})->middleware('guest');

Route::prefix('apps')->group(function() {

    Route::group(['middleware' => ['auth']], function() {
        //route dashboard
        Route::get('/dashboard', DashboardController::class)->name('apps.dashboard');        
    });
});

<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your Admin dashboard.
|
*/
Route::get('/admin', function () {
    return 'Welcome Admin';
})->name('admin');


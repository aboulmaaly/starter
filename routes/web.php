<?php

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

Route::get('landing', function(){
    return view('landing');
})->name('landing');

Route::get('about', function(){
    return view('about');
})->name('about');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function() {
    return view('welcome');
});
// Route::get('/', function () {
//     $data = [];
//     $data['age'] = 31;
//     $data['name'] = "Mohamed";
//     return view('welcome', $data);
// });

// Route::get('index', 'Front\UserController@index');

//  Route test

// Route::get('/test', function () {
//     return 'Welcome';
// })->name('test');

// //  Route parameters

// Route::get('/test1/{id}', function ($id) {
//     return $id;
// })->name('test1');

// // Optional parameter

// Route::get('/test2/{id?}', function () {
//     return 'Welcome';
// })->name('test2');

// Route::namespace('Front')->group(function() {
//     // All route only access controller or methods in folder name front
//     Route::get('users', 'UserController@showAdminName');
// });

// Route::prefix('user')->group(function() {
//     Route::get('show', 'UserController@showUser');
//     Route::delete('delete', 'UserController@deleteUser');
//     // Route::edit('edit', 'UserController@editUser');
//     Route::put('update', 'UserController@putUser');
// });



// Route::get('second', 'Admin\SecondController@showString');

// Route::group(['namespace' => 'Admin'], function() {
//     Route::get('second', 'SecondController@showString0')->middleware('auth');
//     Route::get('second1', 'SecondController@showString1');
//     Route::get('second2', 'SecondController@showString2');
//     Route::get('second3', 'SecondController@showString3');
// });

// Route::get('login', function(){
//     return 'must be login to access this route';
// })->name('login');

// // Middleware

// Route::group(['prefix' => 'users', 'middleware' => 'auth'], function() {

//     Route::get('/table', function() {
//         return 'users table';
//     });
// });

// Route::group(['middleware' => 'auth'], function() {
//     Route::get('users1', 'UserController@index');
// });

// Route::get('users2', 'UserController@index')->middleware('auth');

// Route::get('check', function() {
//     return 'middleware';
// })->middleware('auth');

// Route::resource('news', 'NewsController');
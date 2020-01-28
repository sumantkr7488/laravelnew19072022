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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/contacts', 'ContactController@index')->name('contacts.index');

// Route::post('/contacts', 'ContactController@store')->name('contacts.store');

// Route::get('/contacts/create', 'ContactController@create')->name('contacts.create');

// Route::get('/contacts/{contact}', 'ContactController@show')->name('contacts.show');

// Route::put('/contacts/{contact}', 'ContactController@update')->name('contacts.update');

// Route::delete('/contacts/{contact}', 'ContactController@destroy')->name('contacts.destroy');

// Route::get('/contacts/{contact}/edit', 'ContactController@edit')->name('contacts.edit');
// Route::resource('/contacts', 'ContactController');
// Route::resource('/contacts', 'ContactController')->only(['create', 'store', 'edit', 'update', 'destroy']);
// Route::resource('/contacts', 'ContactController')->except(['index', 'show']);
Route::resources([
    '/contacts' => 'ContactController',
    '/companies' => 'CompanyController',
]);

Auth::routes(['verify' => true]);

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/settings/account', 'Settings\AccountController@index');
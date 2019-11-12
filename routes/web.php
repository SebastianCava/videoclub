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
    return 'Pantalla Principal';
});

Route::get('/login', function () {
    return 'welcome';
});

Route::get('/logout', function () {
    return 'welcome';
});

Route::get('/catalog', function () {
    return 'welcome';
});

Route::get('/catalog/show/{id}', function () {
    return 'welcome';
});

Route::get('/catalog/create', function () {
    return 'welcome';
});

Route::get('/catalog/edit/{id}', function () {
    return 'welcome';
});

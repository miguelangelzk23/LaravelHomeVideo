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
    return view ('home');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/logout', function () {
    return ('Logout usuario ');
});

Route::get('/Catalog', function () {
    return view ('catalog.index');
});

Route::get('/Catalog/show/{id}', function ($id) {
    return view ('catalog.show' , array('id' => $id));
});

Route::get('/Catalog/create', function () {
    return view ('catalog.create ');
});

Route::get('/Catalog/edit/{id}', function ($id) {
    return view ('catalog.edit', array('id' => $id));
});






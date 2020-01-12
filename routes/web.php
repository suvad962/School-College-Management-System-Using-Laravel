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

Route::get('/login', function () {
    return view('login');
});

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
});

Route::post('/valid', 'Allauth@storesession');


//Admin Teacher
Route::get('/admin/add-teacher', function () {
    return view('admin/teacher/add-teacher');
});

Route::get('/admin/edit-teacher', function () {
    return view('admin/teacher/edit-teacher');
});

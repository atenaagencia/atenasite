<?php

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
    return view('site.page.index');
});
Route::get('/serviços', function () {
    return view('site.page.servicos');
});
Route::get('/quemsomos', function () {
    return view('site.page.quemsomos');
});
Route::get('/cases', function () {
    return view('site.page.cases');
});


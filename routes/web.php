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

//homepage
Route::get('/', function () {


    return view('home',[
        'title' => 'Classe 45 test',
        'lorem' => 'ipsum',
    ]);
});

//About us
Route::get('/about', function () {
    return 'ABOUT US';
});

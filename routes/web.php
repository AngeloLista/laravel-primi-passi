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

    $data = [
        'name' => 'Angelo',
        'links' => ['home', 'blog', 'news']
    ];

    return view('home', $data);
})->name('home');

Route::get('/blog', function () {
    $data = [
        'name' => 'Angelo',
        'links' => ['home', 'blog', 'news']
    ];

    return view('blog', $data);
})->name('blog');

Route::get('/news', function () {
    $data = [
        'name' => 'Angelo',
        'links' => ['home', 'blog', 'news']
    ];

    return view('news', $data);
})->name('news');

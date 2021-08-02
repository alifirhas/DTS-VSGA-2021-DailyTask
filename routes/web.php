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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('day1.index', 'day1.index')->name('day.one');
    Route::view('day2.index', 'day2.index')->name('day.two');
    Route::view('day3.index', 'day3.index')->name('day.three');
    Route::view('day4.index', 'day4.index')->name('day.four');
    
});


require __DIR__.'/auth.php';

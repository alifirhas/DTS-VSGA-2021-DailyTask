<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DaySixController;
use App\Http\Controllers\DaySevenController;

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

    Route::prefix('day6/')->group(function () {

        Route::get('', [DaySixController::class, 'index'])->name('day.six');
        Route::post('/view', [DaySixController::class, 'view'])->name('day.six.view');

    });

    Route::prefix('day7/')->group(function () {

        Route::get('/order', [DaySevenController::class, 'index'])->name('day.seven');

    });
    


});

require __DIR__ . '/auth.php';

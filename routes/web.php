<?php

use App\Http\Controllers\BodyCheckController;
use App\Http\Controllers\MyPageController;
use App\Http\Controllers\TypeCheckController;
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
    return view('top');
})->name('top');

Route::group(['middleware' => 'auth'], function () {
//    Route::get('/', function () {
//        return redirect('mypage.index');
//    });


    Route::prefix('mypage')->name('mypage.')->group(function () {
        Route::controller(MyPageController::class)->group(function () {
            Route::get('/', 'index')->name('index');
        });
    });

    Route::prefix('typecheck')->name('check.type.')->group(function () {
        Route::controller(TypeCheckController::class)->group(function () {
            Route::get('/check_start', 'check')->name('start');
            Route::post('/check_result', 'submit')->name('submit');
        });
    });

    Route::prefix('bodycheck')->name('check.body.')->group(function () {
        Route::controller(BodyCheckController::class)->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/check_start', 'check')->name('start');
            Route::post('/check_result', 'submit')->name('submit');
        });
    });

});
require __DIR__.'/auth.php';

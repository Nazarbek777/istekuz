<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Category;
use App\Http\Controllers\CatalogController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\App;
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
    return view('front.index');
});


Route::get('/test', function () {
    return view('front.test');
});

Route::get('language/{locale}', function ($locale) {
    App::setLocale($locale);
    session(['lang' => $locale]);
    return redirect()->back();
})->name('lang');


Route::middleware(['checkAdmin:admin', 'auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');

    });
});

//Route::prefix('admin')->group(function () {
//    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
//});

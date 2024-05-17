<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Category;
use App\Http\Controllers\CatalogController;

use App\Http\Controllers\CategoryController;
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

// Route::get('/', function () {
//     return view('front.index');
// });


Route::get('/about', function () {
    return view('front.about');
});

Route::get('language/{locale}', function ($locale) {

    App::setLocale($locale);
    session(['lang' => $locale]);
    return redirect()->back();
})->name('lang');


Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::resource('pages', PageController::class);

    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);

    Route::resource('media', MediaController::class); 
    Route::resource('catolog', CatalogController::class); 

});

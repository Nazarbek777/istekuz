<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Category;
use App\Http\Controllers\CatalogController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
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


Route::get('/', [FrontendController::class, 'home'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/product', [FrontendController::class, 'product'])->name('product');
Route::get('/category{category}', [FrontendController::class, 'categoryId'])->name('categoryId');
Route::get('/product{product}', [FrontendController::class, 'singleProduct'])->name('singleProduct');
Route::get('/blog/{blog}', [FrontendController::class, 'singleBlog'])->name('singleBlog');

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');


Route::get('/{lang}', function ($lang) {
    session(['lang' => $lang]);
    return back();
})->where('lang', 'en|ru|uz');




Route::middleware(['checkAdmin:admin', 'auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
        Route::resource('category', CategoryController::class);
        Route::resource('product', ProductController::class);
        Route::resource('about', AboutController::class);
        Route::resource('news', NewsController::class);
        Route::resource('team', TeamController::class);
        Route::resource('logo', LogoController::class);
    });
});


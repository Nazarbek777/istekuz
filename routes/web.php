<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
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


Route::view('404', 'errors.404');
Route::get('/', [FrontendController::class, 'home'])->name('index');
Route::get('/mission', [FrontendController::class, 'mission'])->name('mission');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::post('/blog', [FrontendController::class, 'blog_search'])->name('blog.search');
Route::get('/product', [FrontendController::class, 'product'])->name('product');
Route::get('/category/{category}', [FrontendController::class, 'categoryId'])->name('categoryId');
Route::get('/product/{product}/{name?}', [FrontendController::class, 'singleProduct'])->name('singleProduct');
Route::get('/blog/{blog}', [FrontendController::class, 'singleBlog'])->name('singleBlog');
Route::get('/mission', [FrontendController::class, 'mission'])->name('mission');
Route::get('/partner', [FrontendController::class, 'partner'])->name('partner');
Route::get('/history', [FrontendController::class, 'history'])->name('history');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/team/{team}', [FrontendController::class, 'singleTeam'])->name('singleTeam');
Route::get('calculate', [FrontendController::class, 'calculate'])->name('calculate');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');

Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::post('/authenticate', [AdminController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('product/category/{category}', [FrontendController::class, 'category'])->name('product.category');

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
        Route::prefix('order')->group(function () {
            Route::get('/', [OrderController::class, 'index'])->name('order.index');
            Route::get('/create', [OrderController::class, 'create'])->name('order.create');
            Route::get('/{order}', [OrderController::class, 'show'])->name('order.show');
            Route::get('/{order}/edit', [OrderController::class, 'edit'])->name('order.edit');
            Route::put('/{order}', [OrderController::class, 'update'])->name('order.update');
            Route::delete('/{order}', [OrderController::class, 'destroy'])->name('order.destroy');
        });
        Route::get('/search', [NewsController::class, 'search'])->name('search');
    });
});

<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Frontend\TeamController as FrontendTeamController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\AboutController as FrontendAboutController;
use App\Http\Controllers\Frontend\ServiceController as FrontendServiceController;
use App\Http\Controllers\Frontend\ServiceV2Controller as FrontendServiceV2Controller;
use App\Http\Controllers\Frontend\GalleryController as FrontendGalleryController;






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

Route::get('/admin', function () {
    return view('backend.dashboard');
});


Route::prefix('admin')->group(function () {
   
Route::resource('admin',AdminController::class);
Route::resource('category',CategoryController::class);
Route::resource('chart',ChartController::class);
Route::resource('team',TeamController::class);
Route::resource('blog',BlogController::class);
Route::resource('section',SectionController::class);
Route::resource('service',ServiceController::class);
Route::resource('slider',SliderController::class);
Route::resource('page',PageController::class);
Route::resource('portfolio',PortfolioController::class);
});



// long way to create CRUD routes
//Route::get('/admin', [TeamController::class, 'index'])->name('admin');
//Route::get('/admin', [TeamController::class, 'create'])->name('team');
//Route::post('/admin', [TeamController::class, 'store'])->name('team');
//Route::get('/admin/{id}', [TeamController::class, 'edit'])->name('team');
//Route::post('/admin', [TeamController::class, 'update'])->name('team');
//Route::get('/admin/{id}', [TeamController::class, 'delete'])->name('team');

Route::get('/',[FrontendHomeController::class, 'index'])->name('home'); 
Route::get('/about', [FrontendAboutController::class, 'index'])->name('blog');
Route::get('/blog', [FrontendBlogController::class, 'index'])->name('blog');
Route::get('/contact', [FrontendContactController::class, 'index'])->name('contact');
Route::get('/gallery', [FrontendGalleryController::class, 'index'])->name('gallery');
Route::get('/service', [FrontendServiceController::class, 'index'])->name('service');
Route::get('/serviceV2', [FrontendServiceV2Controller::class, 'index'])->name('serviceV2');
Route::get('/team', [FrontendTeamController::class, 'index'])->name('team');

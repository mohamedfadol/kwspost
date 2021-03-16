<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\AdminDashboardComponent;
use App\Http\Livewire\Department\DepartmentComponent;
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
 
// Start LaravelLocalization Admin Route Group For Aurages Panel
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        // route for admin
        Route::middleware(['auth:sanctum', 'verified','isAdmin'])->group(function () {

            Route::get('/admin/dashboard' , [HomeController::class ,'index'])->name('admin.dashboard');
            
            Route::resource('categories' , CategoryController::class);
            Route::get('/admin/categories/active/{category}' , [CategoryController::class,'activeCategory'])
                    ->name('category.activeCategory');
            Route::get('/admin/categories/inActive/{category}' , [CategoryController::class,'inActiveCategory'])
                    ->name('category.inActiveCategory');

            Route::resource('posts' , PostController::class);
            Route::get('/admin/posts/active/{post}' , [PostController::class,'activePost'])
                    ->name('post.activePost');
            Route::get('/admin/posts/inActive/{post}' , [PostController::class,'inActivePost'])
                    ->name('post.inActivePost');


        });

}); //  End LaravelLocalization

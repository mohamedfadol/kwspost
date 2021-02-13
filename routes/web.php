<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DesignationComponent;
use App\Http\Livewire\AdminDashboardComponent;
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

        Route::get('/admin/dashboard' , AdminDashboardComponent::class)->name('admin.dashboard');
        Route::get('/admin/designatin' , DesignationComponent::class)->name('admin.designatin');

    });

}); //  End LaravelLocalization

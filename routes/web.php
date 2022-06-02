<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Login\AuthController;
use App\Http\Controllers\Dashboard\DashboardPostController;
use App\Http\Controllers\Dashboard\DasboardController;
use App\Http\Controllers\Dashboard\DashboardCategoryController;
use App\Http\Controllers\Destination\DestinationCategoryController;
use App\Http\Controllers\Destination\DestinationController;


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

//Home Page
Route::get('/', function () {
    $path = public_path('storage/uploads/');
    if(!file_exists($path)) {
        Artisan::call('storage:link');
    }
    return view('home', [
        "title" => "Beranda",
        "image1" => "1.png",
        "image2" => "2.png",
        "image3" => "3.jpeg",
        
        
    ]);
});

//About Page
Route::get('/about', function () {
    return view('about', [
        "title" => "Tentang",
    ]);
});

//Destination
Route::resource('destinationCategory', DestinationCategoryController::class)->only([
    'index', 'show'
]);
Route::resource('destination', DestinationController::class)->only([
    'index', 'show'
]);
Route::get('/destinationByCategory/{id}', [DestinationController::class, 'destinationByCategory']);

//Auth
Route::get('/login', [AuthController::class, 'loginIndex'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginAuth']);
// Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');;

// Protected Routes for Admin
Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::resource('/dashboard', DasboardController::class);
    Route::resource('/dashboard-destinasi', DashboardPostController::class);
    Route::post('/dashboard/addpost', [DashboardPostController::class, 'store']);
    Route::resource('/dashboard-category', DashboardCategoryController::class);
});


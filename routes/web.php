<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/anime-details', [PaginaController::class, 'animeDetails'])->name('anime-details');
Route::get('/anime-watching', [PaginaController::class, 'animeWatching'])->name('anime-watching');
Route::get('/blog-details', [PaginaController::class, 'blogDetails'])->name('blog-details');
Route::get('/blog', [PaginaController::class, 'blog'])->name('blog');
Route::get('/categories', [PaginaController::class, 'categories'])->name('categories');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function() {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
   
    
    Route::middleware('admin')->group(function() {
        Route::get('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
        Route::get('dashboard', [AdminAuthController::class, 'index'])->name('admin.dashboard');
        Route::get('videos', [VideoController::class , 'create'])->name('create.video');
        Route::post('create', [VideoController::class , 'store'])->name('videos.store');
        Route::get('crear_portadas', [VideoController::class , 'crear_portadas_view'])->name('crear_portadas_view');

        
    });
});


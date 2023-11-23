<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\SuperAdmin\SupPostController;
use App\Http\Controllers\User\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Users Routes

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/user/post', [UserController::class, 'index'])->name('user.post');
    

});

// Admin Routes

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/admin/post', [PostController::class, 'index'])->name('admin.post');
    Route::get('/admin/create', [PostController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [PostController::class, 'store'])->name('admin.store');
    Route::get('/admin/edit/{id}', [PostController::class, 'edit'])->name('admin.edit');
    Route::post('/admin/update/{id}', [PostController::class, 'update'])->name('admin.update');
    Route::get('/admin/destroy/{id}', [PostController::class, 'destroy'])->name('admin.destroy');
});  

// Super Admin Routes

Route::middleware(['auth', 'user-access:super-admin'])->group(function () {
  
    Route::get('/super-admin/dashboard', [SupPostController::class, 'index'])->name('super.admin.dashboard');
    Route::get('/super-admin/post', [SupPostController::class, 'index'])->name('super-admin.post');
    Route::get('super-admin/approve/{id}', [SupPostController::class, 'approve'])->name('super-admin.approve');
    Route::get('/super-admin/destroy/{id}', [SupPostController::class, 'destroy'])->name('super-admin.destroy');

});


// Route::get('/post', [PostController::class, 'index'])->name('post');
// Route::get('/create', [PostController::class, 'create'])->name('create');
// Route::post('/store', [PostController::class, 'store'])->name('store');
// Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
// Route::post('/update/{id}', [PostController::class, 'update'])->name('update');
// Route::get('/destroy/{id}', [PostController::class, 'destroy'])->name('destroy');

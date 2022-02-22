<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isAdmin;
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
    return view('home');
});


Route::get('/admin/dashboard', [FrontController::class, 'admin'])->middleware(['auth'])->name('dashboard');

// user dashboard
Route::get('/admin/dashboard/user', [UserController::class, 'index'])->middleware(['auth', 'isAdmin'])->name('users.index');
Route::put('/admin/dashboard/{id}/update', [UserController::class, 'update'])->middleware(['auth'])->name('users.update');
Route::get('/admin/dashboard/edit', [UserController::class, 'edit'])->middleware(['auth'])->name('users.edit');
// user edit table
Route::get('/admin/dashboard/user/{id}/edit', [UserController::class, 'edit_user'])->middleware(['auth', 'isAdmin'])->name('users.table.edit');
Route::put('/admin/dashboard/user/{id}/update', [UserController::class, 'update_user'])->middleware(['auth', 'isAdmin'])->name('users.table.update');
Route::delete('/admin/dashboard/user/{id}/delete', [UserController::class, 'destroy'])->middleware(['auth', 'isAdmin'])->name('users.destroy');



// galerie
Route::get('/admin/dashboard/gallerie', [ImageController::class, 'gallerie'])->middleware(['auth'])->name('galleries.index');
Route::get('/admin/dashboard/gallerie/{file}/download', [ImageController::class, "download"])->middleware(['auth'])->name('galleries.download');


// image
Route::get('/admin/dashboard/image', [ImageController::class, 'image'])->middleware(['auth', 'isAdmin'])->name('images.index');
Route::post('admin/dashboard/image/store', [ImageController::class, "store_image"])->middleware(['auth', 'isAdmin'])->name('images.store');
Route::delete('/admin/dashboard/image/{id}/delete', [ImageController::class, 'destroy'])->middleware(['auth', 'isAdmin'])->name('images.destroy');

// avatar 
Route::get('/admin/dashboard/avatar', [ImageController::class, 'avatar'])->middleware(['auth', 'isAdmin'])->name('avatars.index');
Route::post('/admin/dashboard/avatar/store', [ImageController::class, 'store_avatar'])->middleware(['auth', 'isAdmin'])->name('avatars.store');
Route::delete('/admin/dashboard/avatar/{id}/delete', [ImageController::class, 'destroy_avatar'])->middleware(['auth', 'isAdmin'])->name('avatars.destroy');


// categorie crud
Route::get('/admin/dashboard/categorie', [ImageController::class, 'categorie'])->middleware(['auth', 'isAdmin'])->name('categories.index');
Route::get('/admin/dashboard/categorie/{id}/edit', [ImageController::class, 'edit_cat'])->middleware(['auth', 'isAdmin'])->name('categories.edit');
Route::put('/admin/dashboard/categorie/{id}/update', [ImageController::class, 'update_cat'])->middleware(['auth', 'isAdmin'])->name('categories.update');
Route::delete('/admin/dashboard/categorie/{id}/delete', [ImageController::class, 'destroy_cat'])->middleware(['auth', 'isAdmin'])->name('categories.destroy');
Route::post('/admin/dashboard/categorie/store', [ImageController::class, 'store_cat'])->middleware(['auth', 'isAdmin'])->name('categories.store');

// Blog
Route::get('/admin/dashboard/blog', [BlogController::class, 'index'])->middleware(['auth'])->name('blogs.index');
Route::post('/admin/dashboard/blog/store', [BlogController::class, 'store'])->middleware(['auth'])->name('blogs.store');





require __DIR__.'/auth.php';

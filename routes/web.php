<?php

use App\Http\Controllers\User\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\User\CommentController;
use App\Http\Controllers\User\ReplyController;
use App\Http\Controllers\User\UserProfileController;
use Illuminate\Support\Facades\Route;

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



Route::controller(MainController::class)->group(function(){
    Route::get('/', 'home')->name('main.home');
    Route::get('/about-us', 'about')->name('main.about');
    Route::get('/category/{category_name}', 'category')->name('main.category');
});


// Contact-us
Route::get('/contact-us', [ContactController::class, 'create'])->name('contact.create');
Route::resource('contact', ContactController::class)->only(['store']);


// Blog
Route::resource('blog', BlogController::class);

Route::middleware('auth')->group(function(){
    // Comment
    Route::post('blog/store/{blog}', [CommentController::class, 'store'])->name('comment.store');
    Route::resource('comment', CommentController::class)->except(['index','create','show', 'store']);

    // Reply
    Route::post('reply/store/{comment}', [ReplyController::class, 'store'])->name('reply.store');
    Route::resource('reply', ReplyController::class)->except(['index','create','show', 'store']);
});


Route::controller(UserProfileController::class)->name('user.profile.')->middleware('auth')->group(function(){
    Route::get('/user-profile', 'show')->name('show');
    Route::patch('/user-profile/update', 'update')->name('update');
    Route::patch('/user-profile/update_image', 'update_image')->name('update_image');
    Route::post('/user-profile/reset_password', 'reset_password')->name('reset_password');
});

require __DIR__.'/auth.php';










// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


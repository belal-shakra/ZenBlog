<?php

use App\Http\Controllers\Admin\AdminMainController;
use App\Http\Controllers\Admin\UserAdminViewController;
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


##################################################
################### User Routes ##################
##################################################



// Main

Route::controller(MainController::class)->group(function(){
    Route::get('/', 'home')->name('main.home');
    Route::get('/about-us', 'about')->name('main.about');
    Route::get('/category/{category_name}', 'category')->name('main.category');
});


// Contact-us
Route::get('/contact-us', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/pin/{contact}', [ContactController::class, 'pin'])->name('contact.pin');
Route::resource('contact', ContactController::class)->except(['create']);


// Blog
Route::post('/blog/save/{blog}', [BlogController::class, 'save'])->name('blog.save')->middleware('auth');
Route::resource('blog', BlogController::class);

Route::middleware('auth')->group(function(){
    // Comment
    Route::post('blog/store/{blog}', [CommentController::class, 'store'])->name('comment.store');
    Route::resource('comment', CommentController::class)->except(['index','create','show', 'store']);

    // Reply
    Route::post('reply/store/{comment}', [ReplyController::class, 'store'])->name('reply.store');
    Route::resource('reply', ReplyController::class)->except(['index','create','show', 'store']);
});


// Profile
Route::controller(UserProfileController::class)->name('user.profile.')->middleware('auth')->group(function(){
    Route::get('/user-profile', 'show')->name('show');
    Route::patch('/user-profile/update', 'update')->name('update');
    Route::patch('/user-profile/update_image', 'update_image')->name('update_image');
    Route::post('/user-profile/reset_password', 'reset_password')->name('reset_password');
});

require __DIR__.'/auth.php';




###################################################
################### Admin Routes ##################
###################################################



Route::prefix('dashboard')->name('admin.')->group(function(){

    // Main Controller
    Route::controller(AdminMainController::class)->name('main.')->group(function(){
        Route::get('/', 'dashboard')->name('dashboard');
    });


    Route::controller(UserAdminViewController::class)->name('user.admin-view.')->group(function(){
        Route::get('/blog-users', 'index')->name('index');
        Route::get('/blog-users/{user}', 'show')->name('show');
    });



    require __DIR__.'/admin/auth.php';
});

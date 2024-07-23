<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('user.pages.home.home');
})->name('home');


Route::get('/contact-us', function () {
    return view('user.pages.contact');
})->name('contact');

Route::get('/about-us', function () {
    return view('user.pages.about');
})->name('about');

Route::get('/my-blogs', function () {
    return view('user.pages.blog.index');
})->name('blog.index');

Route::get('/create', function () {
    return view('user.pages.blog.create');
})->name('blog.create');

Route::get('/show', function () {
    return view('user.pages.blog.show');
})->name('blog.show');

Route::get('/edit', function () {
    return view('user.pages.blog.edit');
})->name('blog.edit');

Route::get('/profile', function () {
    return view('user.pages.profile.profile');
})->name('user.profile');












// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

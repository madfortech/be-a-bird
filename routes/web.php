<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrivacyController;
use App\Http\Controllers\TermConditionController;
use App\Models\Post;
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
    $posts = Post::latest()->get();
    return view('welcome',compact('posts'));
});

// Admin Routes
Route::group(['middleware' => ['auth','role:super-admin','verified']], function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('admin.dashboard');
    //Post Routes
    Route::resource('/posts', PostController::class)->only([
        'index','create','store','edit','update','destroy'
    ]);
    //Privacy Routes
    Route::resource('/privacy', PrivacyController::class)->only([
        'edit','update'
    ]);
    //Privacy Routes
    Route::resource('/terms', TermConditionController::class)->only([
        'edit','update'
    ]);

});

Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy.index');
Route::get('/terms', [TermConditionController::class, 'index'])->name('terms.index');


// User Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', function () {
        return view('home');
    })->name('user.dashboard');
});

Route::middleware('auth','verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

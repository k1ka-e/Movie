<?php

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

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

    Route::post('/posts/comment/{id}', [\App\Http\Controllers\PostController::class, 'comment'])->name('comment');

});

Route::middleware('guest')->group(function () {
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login_process', [\App\Http\Controllers\AuthController::class, 'login'])->name('login_process');

    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register_process', [\App\Http\Controllers\AuthController::class, 'register'])->name('register_process');

    Route::get('/forgot', [\App\Http\Controllers\AuthController::class, 'showForgotForm'])->name('forgot');
    Route::post('/forgot_process', [\App\Http\Controllers\AuthController::class, 'forgot'])->name('forgot_process');
});

Route::get('/contacts', [\App\Http\Controllers\IndexController::class, 'showContactForm'])->name('contacts');
Route::post('/contact_form_process', [\App\Http\Controllers\IndexController::class, 'contactForm'])->name('contact_form_process');


// Админка

Route::group(['prefix' => 'admin','middleware' => ['auth', 'admin']],  function () {
    Route::get('/', [\App\Http\Controllers\Admin\Main\IndexController::class, 'index'])->name('admin.main.index');

    Route::group(['prefix' => 'genres'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Genre\IndexController::class, 'index'])->name('admin.genre.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Genre\IndexController::class, 'create'])->name('admin.genre.create');
        Route::post('/store', [\App\Http\Controllers\Admin\Genre\IndexController::class, 'store'])->name('admin.genre.store');
        Route::get('/{genre}', [\App\Http\Controllers\Admin\Genre\IndexController::class, 'show'])->name('admin.genre.show');
        Route::get('/{genre}/edit', [\App\Http\Controllers\Admin\Genre\IndexController::class, 'edit'])->name('admin.genre.edit');
        Route::patch('/{genre}', [\App\Http\Controllers\Admin\Genre\IndexController::class, 'update'])->name('admin.genre.update');
        Route::delete('/{genre}', [\App\Http\Controllers\Admin\Genre\IndexController::class, 'destroy'])->name('admin.genre.delete');
    });

    Route::group(['prefix' => 'countries'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Сountry\IndexController::class, 'index'])->name('admin.country.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Сountry\IndexController::class, 'create'])->name('admin.country.create');
        Route::post('/store', [\App\Http\Controllers\Admin\Сountry\IndexController::class, 'store'])->name('admin.country.store');
        Route::get('/{country}', [\App\Http\Controllers\Admin\Сountry\IndexController::class, 'show'])->name('admin.country.show');
        Route::get('/{country}/edit', [\App\Http\Controllers\Admin\Сountry\IndexController::class, 'edit'])->name('admin.country.edit');
        Route::patch('/{country}', [\App\Http\Controllers\Admin\Сountry\IndexController::class, 'update'])->name('admin.country.update');
        Route::delete('/{country}', [\App\Http\Controllers\Admin\Сountry\IndexController::class, 'destroy'])->name('admin.country.delete');
    });

    Route::group(['prefix' => 'careers'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Career\IndexController::class, 'index'])->name('admin.career.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Career\IndexController::class, 'create'])->name('admin.career.create');
        Route::post('/store', [\App\Http\Controllers\Admin\Career\IndexController::class, 'store'])->name('admin.career.store');
        Route::get('/{country}', [\App\Http\Controllers\Admin\Career\IndexController::class, 'show'])->name('admin.career.show');
        Route::get('/{country}/edit', [\App\Http\Controllers\Admin\Career\IndexController::class, 'edit'])->name('admin.career.edit');
        Route::patch('/{country}', [\App\Http\Controllers\Admin\Career\IndexController::class, 'update'])->name('admin.career.update');
        Route::delete('/{country}', [\App\Http\Controllers\Admin\Career\IndexController::class, 'destroy'])->name('admin.career.delete');
    });

    Route::group(['prefix' => 'creators_and_actors'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\CreatorsAndActors\IndexController::class, 'index'])->name('admin.creator_and_actor.index');
        Route::get('/create', [\App\Http\Controllers\Admin\CreatorsAndActors\IndexController::class, 'create'])->name('admin.creator_and_actor.create');
        Route::post('/store', [\App\Http\Controllers\Admin\CreatorsAndActors\IndexController::class, 'store'])->name('admin.creator_and_actor.store');
        Route::get('/{creator_and_actor}', [\App\Http\Controllers\Admin\CreatorsAndActors\IndexController::class, 'show'])->name('admin.creator_and_actor.show');
        Route::get('/{creator_and_actor}/edit', [\App\Http\Controllers\Admin\CreatorsAndActors\IndexController::class, 'edit'])->name('admin.creator_and_actor.edit');
        Route::patch('/{creator_and_actor}', [\App\Http\Controllers\Admin\CreatorsAndActors\IndexController::class, 'update'])->name('admin.creator_and_actor.update');
        Route::delete('/{creator_and_actor}', [\App\Http\Controllers\Admin\CreatorsAndActors\IndexController::class, 'destroy'])->name('admin.creator_and_actor.delete');
    });

    Route::group(['prefix' => 'movies'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\Movie\IndexController::class, 'index'])->name('admin.movie.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Movie\IndexController::class, 'create'])->name('admin.movie.create');
        Route::post('/store', [\App\Http\Controllers\Admin\Movie\IndexController::class, 'store'])->name('admin.movie.store');
        Route::get('/{movie}', [\App\Http\Controllers\Admin\Movie\IndexController::class, 'show'])->name('admin.movie.show');
        Route::get('/{movie}/edit', [\App\Http\Controllers\Admin\Movie\IndexController::class, 'edit'])->name('admin.movie.edit');
        Route::patch('/{movie}', [\App\Http\Controllers\Admin\Movie\IndexController::class, 'update'])->name('admin.movie.update');
        Route::delete('/{movie}', [\App\Http\Controllers\Admin\Movie\IndexController::class, 'destroy'])->name('admin.movie.delete');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\User\IndexController::class, 'index'])->name('admin.user.index');
        Route::get('/create', [\App\Http\Controllers\Admin\User\IndexController::class, 'create'])->name('admin.user.create');
        Route::post('/store', [\App\Http\Controllers\Admin\User\IndexController::class, 'store'])->name('admin.user.store');
        Route::get('/{user}', [\App\Http\Controllers\Admin\User\IndexController::class, 'show'])->name('admin.user.show');
        Route::get('/{user}/edit', [\App\Http\Controllers\Admin\User\IndexController::class, 'edit'])->name('admin.user.edit');
        Route::patch('/{user}', [\App\Http\Controllers\Admin\User\IndexController::class, 'update'])->name('admin.user.update');
        Route::delete('/{user}', [\App\Http\Controllers\Admin\User\IndexController::class, 'destroy'])->name('admin.user.delete');
    });
});

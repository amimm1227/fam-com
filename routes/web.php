<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToppageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ShoppingItemController;

// ...

Route::middleware(['guest'])->group(function () {
    // 未ログイン状態のみアクセス可能なルート
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});

// ...

    // ユーザー登録画面とログイン画面以外のルートは認証が必要
    Route::middleware(['auth'])->group(function () {
    // ログイン後にアクセス可能なルート
    Route::get('/', [ToppageController::class, 'index'])->name('home');

    // 以下、ログイン後にアクセス可能なルートを追加していく

    Route::get('/top', [ToppageController::class, 'index']);
    Route::get('/news/add', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news/add', [NewsController::class, 'store'])->name('news.store');
    Route::get('/calendar/add', [CalendarController::class, 'index']);
    Route::post('/calendar/add', [CalendarController::class, 'store']);
    Route::get('/shopping-items', [ShoppingItemController::class, 'index']);
    Route::post('/shopping-items', [ShoppingItemController::class, 'store']);
    Route::post('/shopping-items/{item}/check', [ShoppingItemController::class, 'checkItem']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // ログアウトのルートを追加
});

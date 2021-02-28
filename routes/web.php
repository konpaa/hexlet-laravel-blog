<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;



Route::get('/', [PageController::class, 'welcome'])->name('welcome.blog');

Route::get('articles', [ArticleController::class, 'index'])->name('article.index');

Route::get('articles/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('articles', [ArticleController::class, 'store'])->name('article.store');

Route::get('articles/{id}', [ArticleController::class, 'show'])->name('article.show');


Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::patch('articles/{id}', [ArticleController::class, 'update'])->name('article.update');

Route::delete('articles/{id}', [ArticleController::class, 'destroy'])->name('article.destroy');


<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
// Rotta per la home
Route::get('/', [GeneralController::class, 'home'])->name('home');
// Rotta per la pagina degli articoli (index)
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
// Rotta per la creazione di un nuovo articolo (create)
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::post('/articles/submit', [ArticleController::class, 'store'])->name('articles.submit');

// Rotta per la visualizzazione di un articolo specifico (show)
Route::get('/articles/{article}/detail', [ArticleController::class, 'show'])->name('articles.show');
// Rotta per la modifica di un articolo specifico (edit)
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
Route::put('/articles/{article}/update', [ArticleController::class, 'update'])->name('articles.update');

// Rotta per la cancellazione di un articolo specifico (destroy)
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
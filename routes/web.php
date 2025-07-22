<?php
use App\Http\Controllers\Controller;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController; 
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




// Rotta per la creazione di un nuovo tag (create)
Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');
// Rotta per la creazione di un nuovo tag (store)   
Route::post('/tags/submit', [TagController::class, 'store'])->name('tags.submit');
// Rotta per la visualizzazione di un tag specifico (show)
//Route::get('/tags/{tag}', [TagController::class, 'show'])->name('tags.show');
// Rotta per la modifica di un tag specifico (edit)
Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');
// Rotta per la modifica di un tag specifico (update)
Route::put('/tags/{tag}/update', [TagController::class, 'update'])->name('tags.update');
// Rotta per la cancellazione di un tag specifico (destroy)
Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');





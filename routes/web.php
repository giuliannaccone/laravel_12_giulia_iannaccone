<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

//Rotta che mostra l'home page
Route::get ('/', function (){
    return view('index.index');
})
->name('index');


//Rotta che mostra elenco articoli
Route::get ('/blog', [PostController::class, 'index'])
->name('blog.index');


//Rotta che mostra il form per la creazione di un articolo
Route::get ('/blog/create', [PostController::class, 'create'])
->name('blog.create')
->middleware(['auth', 'verified']);;

//Rotta che salva l'articolo nel db
Route::post('/blog/create', [PostController::class, 'store'])
->name('blog.store')
->middleware(['auth', 'verified']);;


//Rotta che mostra il form per la modifica di un articolo 
Route::get('/blog/edit/{id}', [PostController::class, 'edit'])
->name('blog.edit')
->middleware(['auth', 'verified']);;

//Rotta che aggiorna l'articolo nel db
Route::put('/blog/edit/{id}', [PostController::class, 'update'])
->name('blog.update')
->middleware(['auth', 'verified']);;

//Rotta che mostra la pagina di dettaglio di un articolo
Route::get ('/blog/{url}/{id}', [PostController::class, 'show'])
->name('blog.show');

//Rotta che elimina l'articolo selezionato
Route::delete('/blog/{id}', [PostController::class, 'destroy'])
->name('blog.destroy')
->middleware(['auth', 'verified']);;

//Rotta che mostra il profilo
Route::get('/profilo', function(){
    return 'Profilo utente';
})
->name('user.profile')
->middleware(['auth', 'verified']);
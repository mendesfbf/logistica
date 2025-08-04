<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControleController;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ProjetorController;
use App\Http\Controllers\NotebookController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
return view('home');
})->middleware('auth');

//USUARIOS
Route::get('user.index', [UserController::class, 'index'])->name('user.index')->middleware('auth');
Route::get('user.create', [UserController::class, 'create'])->name('user.create')->middleware('auth');
Route::post('user.store', [UserController::class, 'store'])->name('user.store')->middleware('auth');
Route::get('user.destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('auth');

//CONTROLE
Route::get('controle.list', [ControleController::class, 'index'])->name('controle.index')->middleware('auth');
Route::get('controle.create', [ControleController::class, 'create'])->name('controle.create')->middleware('auth');
Route::post('controle.store', [ControleController::class, 'store'])->name('controle.store')->middleware('auth');
Route::get('controle.destroy/{id}', [ControleController::class, 'destroy'])->name('controle.destroy')->middleware('auth');
Route::get('controle.update/{id}', [ControleController::class, 'update'])->name('controle.update')->middleware('auth');

//SALAS
Route::get('sala.index', [SalaController::class, 'index'])->name('sala.index')->middleware('auth');

//PESSOAS
Route::get('pessoa.index', [PessoaController::class, 'index'])->name('pessoa.index')->middleware('auth');

//PROJETOR
Route::get('projetor.index', [ProjetorController::class, 'index'])->name('projetor.index')->middleware('auth');

//NOTEBOOK
Route::get('notebook.index', [NotebookController::class, 'index'])->name('notebook.index')->middleware('auth');

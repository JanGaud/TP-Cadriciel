<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PostController;
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

// Home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Etudiant related routes
Route::get('create', [EtudiantController::class, 'create']);
Route::get('etudiants', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('etudiant/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::post('etudiant-create', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('etudiant-edit/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');
Route::post('/login', [EtudiantController::class, 'login']);
Route::get('/logout', [EtudiantController::class, 'logout'])->name('etudiant.logout');

// Forum related routes
Route::get('forum', [ForumController::class, 'index'])->name('forum.index');
Route::get('forum/create', [PostController::class, 'create'])->name('forum.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/forum/{post}', [PostController::class, 'show'])->name('forum.show');


// Admin-only routes
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin-only routes here
});

Route::middleware(['auth'])->group(function () {
    // Authenticated-only routes here
});

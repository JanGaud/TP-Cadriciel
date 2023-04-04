<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LocalizationController;

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

// language switcher
Route::get('/lang/{locale}', [LocalizationController::class, 'index']);


// Home page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Accessible to all
Route::redirect('/login', '/')->name('login');
Route::post('/login', [EtudiantController::class, 'login']);
Route::get('/logout', [EtudiantController::class, 'logout'])->name('etudiant.logout');

// Admin-only routes
Route::get('create', [EtudiantController::class, 'create'])
    ->middleware(['auth', 'auth.admin']);
Route::get('etudiants', [EtudiantController::class, 'index'])->name('etudiant.index')
    ->middleware(['auth', 'auth.admin']);
Route::get('etudiant/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit')
    ->middleware(['auth', 'auth.admin']);
Route::post('etudiant-create', [EtudiantController::class, 'store'])->name('etudiant.store')
    ->middleware(['auth', 'auth.admin']);
Route::get('etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit')
    ->middleware(['auth', 'auth.admin']);
Route::put('etudiant-edit/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update')
    ->middleware(['auth', 'auth.admin']);
Route::delete('etudiant-edit/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy')
    ->middleware(['auth', 'auth.admin']);


// Authenticated routes
Route::get('forum', [ForumController::class, 'index'])->name('forum.index')
    ->middleware('auth');
Route::get('forum/create', [PostController::class, 'create'])->name('forum.create')
    ->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store')
    ->middleware('auth');
Route::get('/forum/{post}', [PostController::class, 'show'])->name('forum.show')
    ->middleware('auth');
Route::get('/post-edit/{post}', [PostController::class, 'edit'])->name('forum.edit')
    ->middleware('auth');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update')
    ->middleware('auth');
Route::delete('/forum/{post}/delete', [PostController::class, 'destroy'])->name('post.destroy')
    ->middleware('auth');

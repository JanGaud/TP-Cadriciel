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

// Etudiant related routes
Route::get('create', [EtudiantController::class, 'create'])
    ->middleware(['auth', 'auth.admin']);
Route::get('etudiants', [EtudiantController::class, 'index'])->name('etudiant.index');
Route::get('etudiant/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::post('etudiant-create', [EtudiantController::class, 'store'])->name('etudiant.store');
Route::get('etudiant-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('etudiant.edit');
Route::put('etudiant-edit/{etudiant}', [EtudiantController::class, 'update'])->name('etudiant.update');
Route::delete('etudiant-edit/{etudiant}', [EtudiantController::class, 'destroy'])->name('etudiant.destroy');
Route::redirect('/login', '/')->name('login');
Route::post('/login', [EtudiantController::class, 'login']);
Route::get('/logout', [EtudiantController::class, 'logout'])->name('etudiant.logout');

// Forum related routes
Route::get('forum', [ForumController::class, 'index'])
    ->name('forum.index')
    ->middleware('auth');
Route::get('forum/create', [PostController::class, 'create'])->name('forum.create')
    ->middleware('auth');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/forum/{post}', [PostController::class, 'show'])->name('forum.show');
Route::get('/post-edit/{post}', [PostController::class, 'edit'])->name('forum.edit');
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');
Route::delete('/forum/{post}/delete', [PostController::class, 'destroy'])->name('post.destroy');


// Route::get('/forum/profile', [ForumController::class, 'profile'])->name('forum.profile');







// Admin-only routes
Route::middleware(['auth', 'admin'])->group(function () {
    // Admin-only routes here
});

Route::middleware(['auth'])->group(function () {
    // Authenticated routes here
});

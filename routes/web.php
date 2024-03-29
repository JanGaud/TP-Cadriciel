<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
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
});

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




// Route::middleware(['auth', 'admin'])->group(function () {
//     // Admin-only routes here
// });
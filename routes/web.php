<?php

use App\Http\Controllers\ProfileController;
use App\Models\Shoe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;

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

Route::get('/', function () {
    $shoes = Shoe::all();
    return view('welcome', compact('shoes'));
});

Route::get('/backoffice', [ShoeController::class, 'index'])->middleware(['auth', 'verified'])->name('backoffice');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create', function () {
        return view('admin.shoes.create');
    })->name('create');
});


Route::middleware('auth')->group(function () {
    Route::get('/shoes/trash', [ProfileController::class, 'trash'])->name('shoes.trash');
    Route::put('/shoes/{shoe}/restore', [ProfileController::class, 'restore'])->name('shoes.restore');
    Route::delete('/shoes/{shoe}/force-delete', [ProfileController::class, 'forceDelete'])->name('shoes.forse-delete');
    Route::resource('shoes', ShoeController::class)->parameters(['shoes' => 'shoe:slug']);
    // Route::get('/shoes/{shoe:slug}', [ShoeController::class, 'show'])->name('shoes.show');
});


require __DIR__ . '/auth.php';

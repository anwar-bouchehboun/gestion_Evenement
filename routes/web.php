<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;

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
    return view('welcome');
});

Route::middleware(['auth', 'role:client'])->group(function () {
    Route::get('/client', [ClientController::class, 'index'])->name('client');
    Route::get('/permission/{user}',[ClientController::class, 'askpermession'])->name('Accepte');


});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/Admin', [AdminController::class, 'index'])->name('dashbord.admin');
    Route::resource('/categorie', CategorieController::class);
    Route::get('/givepermission',[AdminController::class, 'givePermission'])->name('dashbord.permission');
    Route::put('/permission/accepte/{user}',[AdminController::class, 'updatepermsioon'])->name('dashbord.donpermission');
    Route::put('/permission/refuser/{user}',[AdminController::class, 'RefuserPission'])->name('dashbord.refuser');

});

Route::middleware(['auth','permission:organise'])->group(function(){
 Route::resource('/Event', EventController::class);
});




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

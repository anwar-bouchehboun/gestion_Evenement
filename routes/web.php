<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('Home');

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
    Route::put('/accepet/{event}',[AdminController::class, 'acceptevent'])->name('dashbord.event');
    Route::put('/compte/refuser/{user}',[AdminController::class, 'refuseruser'])->name('refuser.compte');
    Route::put('/compte/accepte/{user}',[AdminController::class, 'accepteuser'])->name('accepte.compte');



});

Route::middleware(['auth','role:organisateur'])->group(function(){
 Route::resource('/event', EventController::class);
 Route::put('/accepte/{reservation}',[EventController::class, 'acceptereserve'])->name('accepte.reservation');
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
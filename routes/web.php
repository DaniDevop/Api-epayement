<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PaiementController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});



Route::get('/login',[AdminController::class,'login'])->name('login.admin');

Route::post('/loginAdmin',[AdminController::class,'doLogin'])->name('doLogin.admin');
Route::post('/pay',[PaiementController::class,'initialize'])->name('pay');
Route::post('/callback',[AdminController::class,'callback'])->name('callback');

// Client

Route::get('/loginClient',[ClientController::class,'loginClient'])->name('login.client');

Route::get('/paiement/{id}',[ClientController::class,'paiement']);


Route::get('/homeClient',[ClientController::class,'home'])->name('clients.home');
Route::post('/loginClient',[ClientController::class,'doLogin'])->name('clients.doLogin');
Route::get('/logoutClient',[ClientController::class,'logoutClient'])->name('logout.clients');
Route::get('/TransactionClient',[ClientController::class,'transaction'])->name('transaction.clients');
Route::get('/changeKey/{id}',[ClientController::class,'newClientKey'])->name('key.clients');
Route::post('/changeData',[ClientController::class,'modifyCompte'])->name('clients.changeCompte');

Route::post('/paiementClient',[PaiementController::class,'pay'])->name('clients.paiements');

Route::post('/demandeMarchand',[AdminController::class,'addDemande'])->name('demande.marchand');

Route::middleware(['auth.admin'])->group(function(){

Route::get('/admin',[AdminController::class,'dashboard'])->name('home.admin');
Route::get('/listesDemande',[AdminController::class,'listes_demandeAdmin'])->name('listes.demande');
Route::get('/activeCompte/{id}',[AdminController::class,'activeCompte'])->name('activeCompte.demande');
Route::get('/listesClient',[AdminController::class,'listes_client'])->name('listes.clients');

Route::post('/logouAdmin',[AdminController::class,'logout'])->name('logout.admin');

});


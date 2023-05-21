<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Client\ClientController;


Route::get('/client', function () {
    return view('client');
});

Route::get('/', function () {
     return redirect('login');;
});

Auth::routes();


//*********************route admin *****************/
Route::group(['middleware'=>['auth','isAdmin']], function(){
    Route::get('/accueil', [AdminController::class, 'Accueil'])->name('accueil');

    Route::get('/gerer_compte', [AdminController::class, 'GetAccount'])->name('gerer_compte');

    Route::get('/supprimer/{id}',      [AdminController::class, 'supprimer'])->name('supprimer');

    Route::put('/update_account/{id}', [AdminController::class, 'update_account'])->name('update_account');

    Route::get('/home',              [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/historique',        [AdminController::class, 'Historique'])->name('historique');

    Route::get('/gerer_vol',         [AdminController::class, 'GetVol'])->name('gerer_vol');

    Route::get('/calendar',          [AdminController::class, 'Calendar'])->name('calendar');

    Route::get('/maps',              [AdminController::class, 'Maps'])->name('maps');

    Route::get('/historique',        [AdminController::class, 'History'])->name('historique');

    Route::get('supprimer_historique/{id}',[AdminController::class, 'DeleteHistory'])->name('supprimer_historique');



    Route::get('/gerer_vol',         [AdminController::class, 'GererVol']);

    Route::post('add_vol',           [AdminController::class, 'AddVol'])->name('add_vol');

    Route::get('/supprimer_vol/{id}',[AdminController::class, 'DeleteVol'])->name('supprimer_vol');

    Route::put('/update_vol/{id}',   [AdminController::class, 'UpdateVol'])->name('update_vol');


});

//**route client*********** */
Route::group(['middleware'=>['auth','isClient']], function(){

    Route::get('/client',          [ClientController::class, 'GererVol']);
    Route::get('/history',         [ClientController::class, 'History'])->name('history');
    Route::get('/saved_vols',      [ClientController::class, 'FetchSavedVol']);
    Route::post('send_rec',        [ClientController::class, 'EnvoyerReclamation'])->name('send_rec');
    Route::put('/saved_vol/{id}',  [ClientController::class, 'SavedVol'])->name('saved_vol');

    Route::get('supprimer_history/{id}',[ClientController::class, 'DeleteHistory'])->name('supprimer_history');

    Route::get('/aboutus',              [ClientController::class, 'Aboutus'])->name('aboutus');




});








<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();

Route::get('/', 'UserController@home')->name('home');
Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');

Route::group(['prefix'=> 'user'], function() {

    Route::get('/', 'UserController@userslist')->name('users.list');
    Route::get('/new', 'UserController@userNew')->name('users.new');
    Route::get('/{id}/edit', 'UserController@userEdit')->name('users.edit');
    Route::post('/store', 'UserController@userStore')->name('users.store');
    Route::post('/{id}/update', 'UserController@userUpdate')->name('users.update');
});

Route::group(['prefix'=> 'demande-test-labo'], function() {

    Route::get('/', 'DemandeController@demandeList')->name('demande.list');
    Route::get('/new', 'DemandeController@demandeNew')->name('demande.new');
    Route::get('/{id}/edit', 'DemandeController@demandeEdit')->name('demande.edit');
    Route::post('/store', 'DemandeController@demandeStore')->name('demande.store');
    Route::post('/{id}/update', 'DemandeController@demandeUpdate')->name('demande.update');
    Route::get('/{id}/show', 'DemandeController@demandeShow')->name('demande.show');
    Route::post('/{id}/show', 'DemandeController@demandeValidation')->name('demande.validation');
    Route::post('/{id}/amende', 'DemandeController@demandeAmende')->name('demande.amende');
    Route::post('/{id}/attente', 'DemandeController@demandeStatusChange')->name('demande.attente');
});

Route::group(['prefix'=> 'importation'], function() {

    Route::get('/', 'ImportationController@importationList')->name('importation.list');
    Route::get('/new', 'ImportationController@importationNew')->name('importation.new');
    Route::post('/import', 'ImportationController@importationImport')->name('importation.import');
});

Route::group(['prefix'=> 'autorisation'], function() {

    Route::get('/', 'AutorisationController@autorisationList')->name('autorisation.list');
    Route::get('/new', 'AutorisationController@autorisationNew')->name('autorisation.new');
    Route::post('/import', 'AutorisationController@autorisationImport')->name('autorisation.import');
});

Route::group(['prefix'=> 'typeproduit'], function() {

    Route::get('/', 'TypeProduitController@typesList')->name('type.list');
    Route::get('/new', 'TypeProduitController@typeNew')->name('type.new');
    Route::get('/{id}/edit', 'TypeProduitController@typeEdit')->name('type.edit');
    Route::post('/store', 'TypeProduitController@typeStore')->name('type.store');
    Route::post('/{id}/update', 'TypeProduitController@typeUpdate')->name('type.update');
});

Route::group(['prefix'=> 'laboratoire'], function() {

    Route::get('/', 'LaboratoireController@laboratoiresList')->name('laboratoire.list');
    Route::get('/new', 'LaboratoireController@laboratoireNew')->name('laboratoire.new');
    Route::get('/{id}/edit', 'LaboratoireController@laboratoireEdit')->name('laboratoire.edit');
    Route::post('/store', 'LaboratoireController@laboratoireStore')->name('laboratoire.store');
    Route::post('/{id}/update', 'LaboratoireController@laboratoireUpdate')->name('laboratoire.update');
});

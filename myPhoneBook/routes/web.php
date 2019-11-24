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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/error',function (){
    return view('error');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['admin']], function () {
// VISUALISATION DE DES DB
    Route::get('/entreprise/id', 'EntreprisesController@list'); //entreprises
    Route::get('/collaborateur/id', 'CollaborateursController@listcolla'); //collaborateurs
// AJOUTER UNE ENTREPRISE/COLLABORATEUR A NOTRE DB
    Route::get('/entreprise/create', 'EntreprisesController@create'); //entreprises
    Route::post('/entreprise/create', 'EntreprisesController@store'); //entreprises
    Route::get('/collaborateur/create', 'CollaborateursController@create'); //collaborateurs
    Route::post('/collaborateur/create', 'CollaborateursController@store'); //collaborateurs
// SUPPRIMER DE LA DB
    Route::delete('/entreprise/delete/{name}', 'EntreprisesController@destroy');
    Route::delete('/collaborateur/delete/{name}', 'CollaborateursController@destroy');
// AFFICHER INFOS ENTREPRISE
    Route::get('/entreprise/{name}', 'EntreprisesController@show'); //entreprise
    Route::get('/collaborateur/{name}', 'CollaborateursController@show'); //collaborateur
// EDITER INFOS ENTREPRISE
    Route::get('/entreprise/edit/{entreprise}', 'EntreprisesController@edit'); //entreprise
    Route::post('/entreprise/edit/{entreprise}', 'EntreprisesController@update'); //entreprise
    Route::get('/collaborateur/edit/{collaborateur}', 'CollaborateursController@edit'); //collaborateur
    Route::post('/collaborateur/edit/{collaborateur}', 'CollaborateursController@update'); //collaborateur
});
Route::group(['middleware' => ['gestionnaire']], function () {
// VISUALISATION DE DES DB
    Route::get('/entreprise/id', 'EntreprisesController@list'); //entreprises
    Route::get('/collaborateur/id', 'CollaborateursController@listcolla'); //collaborateurs
// AJOUTER UNE ENTREPRISE/COLLABORATEUR A NOTRE DB
    Route::get('/entreprise/create', 'EntreprisesController@create'); //entreprises
    Route::post('/entreprise/create', 'EntreprisesController@store'); //entreprises
    Route::get('/collaborateur/create', 'CollaborateursController@create'); //collaborateurs
    Route::post('/collaborateur/create', 'CollaborateursController@store'); //collaborateurs
// AFFICHER INFOS ENTREPRISE
    Route::get('/entreprise/{name}', 'EntreprisesController@show'); //entreprise
    Route::get('/collaborateur/{name}', 'CollaborateursController@show'); //collaborateur
// EDITER INFOS ENTREPRISE
    Route::get('/entreprise/edit/{entreprise}', 'EntreprisesController@edit'); //entreprise
    Route::post('/entreprise/edit/{entreprise}', 'EntreprisesController@update'); //entreprise
    Route::get('/collaborateur/edit/{collaborateur}', 'CollaborateursController@edit'); //collaborateur
    Route::post('/collaborateur/edit/{collaborateur}', 'CollaborateursController@update'); //collaborateur
});
Route::group(['middleware' => ['user']], function () {
// VISUALISATION DE DES DB
    Route::get('/entreprise/id', 'EntreprisesController@list'); //entreprises
    Route::get('/collaborateur/id', 'CollaborateursController@listcolla'); //collaborateurs
});
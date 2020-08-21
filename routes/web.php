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
// Afficher le formulaire apprenant
Route::get('forme', 'ApprenantController@create');
// Afficher formulaire tuteur 
Route::get('form', 'TuteurController@create');
// Enrégister un tuteur
Route::post('formtuteur', 'TuteurController@store');
// Enrégistrer un apprenant
Route::post('formapprenant', 'ApprenantController@store');
// Lister un apprenant
Route::get('listeApp', 'ApprenantController@liste');
// Lister un tuteur
Route::get('listeTut', 'TuteurController@liste');
Route::get('detailApp/{id}', 'ApprenantController@show');
Route::get('supprimer/{id}','ApprenantController@destroy');
Route::post('Ajout/{id}', 'ApprenantController@update');
Route::get('vuedit/{id}','ApprenantController@Edit');
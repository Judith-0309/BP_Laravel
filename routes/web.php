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
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home','ClientEntrepriseController@index')->name('home');

Route::get('/clientEntreprise/add','ClientEntrepriseController@add')->name('addClient');
Route::get('/clientEntreprise/edit/{id}','ClientEntrepriseController@edit')->name('editClient');
Route::post('/clientEntreprise/update','ClientEntrepriseController@update')->name('updateClient');
Route::get('/clientEntreprise/delete/{id}','ClientEntrepriseController@delete')->name('deleteClient');
Route::get('/clientEntreprise/getAll','ClientEntrepriseController@getAll')->name('getAllClient');
Route::post('/clientEntreprise/persist','ClientEntrepriseController@persist')->name('persistclient');





Route::get('/compte/add','CompteController@add')->name('addCompte');
Route::get('/compte/edit/{id}','CompteController@edit')->name('editCompte');
Route::post('/compte/update','CompteController@update')->name('updateCompte');
Route::get('/compte/delete/{id}','CompteController@delete')->name('deleteCompte');
Route::get('/compte/getAll','CompteController@getAll')->name('getAllCompte');
Route::post('/compte/persist','CompteController@persist')->name('persistCompte');
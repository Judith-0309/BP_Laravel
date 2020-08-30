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

Route::get('/home','ClientEntrepriseController@index')->name('home');

Route::get('/client/add','ClientEntrepriseController@add')->name('addClient');
Route::get('/client/edit/{id}','ClientEntrepriseController@edit')->name('editClient');
Route::post('/client/update','ClientEntrepriseController@update')->name('updateClient');
Route::get('/client/delete/{id}','ClientEntrepriseController@delete')->name('deleteClient');
Route::get('/client/getAll','ClientEntrepriseController@getAll')->name('getAllClient');



Route::get('/compte/add','CompteController@add')->name('addCompte');
Route::get('/compte/edit/{id}','CompteController@edit')->name('editCompte');
Route::post('/compte/update','CompteController@update')->name('updateCompte');
Route::get('/compte/delete/{id}','CompteController@delete')->name('deleteCompte');
Route::get('/compte/getAll','CompteController@getAll')->name('getAllCompte');
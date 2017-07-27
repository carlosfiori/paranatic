<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');


Route::get('/', 'PrincipalController@index');
Route::get('/system', 'PrincipalController@system');


Route::get('/parceiros', 'EmpresasController@index');
Route::get('/novo', 'NovoController@create');
Route::post('/novo', 'NovoController@store');


Route::get('/extrato', 'ExtratoController@index');
Route::get('/economias', 'RelatoriosController@index');

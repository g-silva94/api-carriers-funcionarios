<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/funcionarios/relatorio', 'FuncionariosController@report');
Route::get('/funcionarios/visualizar/{id}', 'FuncionariosController@show');
Route::get('/funcionarios/visualizar', 'FuncionariosController@index');
Route::post('/funcionarios/criar', 'FuncionariosController@store');
Route::put('/funcionarios/atualizar/{id}', 'FuncionariosController@update');
Route::delete('/funcionarios/deletar/{id}', 'FuncionariosController@destroy');
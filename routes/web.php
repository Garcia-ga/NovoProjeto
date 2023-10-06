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
/*
use App\Http\Controllers\ProdutoController;

Route::get('home', 'HomeController@index');

Route::Controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);
*/

Route::get('/produtos', 'ProdutoController@lista');

Route::get('/produtos/mostra/{id?}', 'ProdutoController@mostra')->where('id', '[0-9]+');

Route::get('/produtos/novo', 'ProdutoController@novo');

Route::post('/produtos/adiciona', 'ProdutoController@adiciona');

Route::get('/produtos/json', 'ProdutoController@listaJson');

Route::get('/produtos/remover/{id}', 'ProdutoController@remover');
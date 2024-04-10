<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/categoria/create', 'CategoriaController@create')->name('categoria.create');
Route::get('/categoria', 'CategoriaController@index')->name('categoria.index');

Route::get('/transacao/filtro', 'TipoTransacaoController@index')->name('filtro.index'); //filtro

Route::get('/transacao/create', 'TransacaoController@create')->name('transacao.create');
Route::post('/transacao', 'TransacaoController@store')->name('transacao.store');
Route::get('/transacao', 'TransacaoController@index')->name('transacao.index');

Route::post('/transacao/{id}', 'TransacaoController@destroy')->name('transacao.destroy');



Route::get('/api/tipoTransacoes', function(){
     return collect([
          ['id' => 1, 'nome' => 'Venda'],               
          ['id' => 2, 'nome' => 'Compra'],               
          ['id' => 3, 'nome' => 'Recebimento'],               
          ['id' => 4, 'nome' => 'Pagamento']               
     ]);
});

Route::get('/api/metodosPagamento', function(){
     return collect([
          ['id' => 1, 'nome' => 'Espécie'],               
          ['id' => 2, 'nome' => 'Cartão'],               
          ['id' => 3, 'nome' => 'Pix'],               
          ['id' => 4, 'nome' => 'Boleto']               
     ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
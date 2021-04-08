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


Route::get('/menu', function () {
    return view('menu');
})->name('menu');


Route::get('/cadastro', 'App\Http\Controllers\CadastroController@cadastroForm')->name ('cadastro');
Route::post('/salvarUsuario', 'App\Http\Controllers\CadastroController@cadastrar')->name ('salvarUsuario');

Route::get('/lista', 'App\Http\Controllers\CadastroController@listaForm')->name ('lista');
Route::get('/usuario/editRegistro/{id}', 'App\Http\Controllers\CadastroController@editarUsuario')->name ('editRegistro');
Route::post('/usuario/salvarRegistro}', 'App\Http\Controllers\CadastroController@RegistroSalvar')->name ('salvarRegistro');
Route::get('/usuario/excluir/{id}', 'App\Http\Controllers\CadastroController@excluirRegistro')->name ('excluir');



Route::get('/cadastroEndereco', 'App\Http\Controllers\EnderecoController@enderecoForm')->name ('cadastroEndereco');

Route::get('/listaEndereco', 'App\Http\Controllers\EnderecoController@listaEnderecoForm')->name ('listaEndereco');

Route::get('/endereco/editEndereco/{id}', 'App\Http\Controllers\EnderecoController@editarEndereco')->name ('editEndereco');
Route::post('/endereco/salvarEndereco}', 'App\Http\Controllers\EnderecoController@cadastrarEndereco')->name ('salvarEndereco');
Route::get('/endereco/excluirEndereco/{id}', 'App\Http\Controllers\EnderecoController@excluirEndereco')->name ('excluirEndereco');









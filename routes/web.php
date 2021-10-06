<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProdutoController;
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


Route::match(['get', 'post'],'/',[ProdutoController::class, 'index'])->name('home');

Route::match(['get', 'post'],'/categoria',[ProdutoController::class, 'categoria'])->name('categoria');

Route::match(['get', 'post'],'/{idcategoria}/categoria',[ProdutoController::class, 'categoria'])->name('categoria_id');

Route::match(['get', 'post'],'/cadastrar',[ClienteController::class, 'cadastrar'])->name('cadastrar');

Route::match(['get', 'post'],'/cliente',[ClienteController::class, 'cadastrarcliente'])->name('cadastrar_cliente');

Route::match(['get', 'post'],'/{idproduto}/carrinho/adicionar',[ProdutoController::class, 'adc_carrinho'])->name('adc_carrinho');

Route::match(['get', 'post'],'/carrinho',[ProdutoController::class, 'vercarrinho'])->name('ver_carrinho');

Route::match(['get', 'post'],'/excluircarrinho/{indice}',[ProdutoController::class, 'excluircarrinho'])->name('excluir_carrinho');
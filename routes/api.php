<?php

use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\ImagensController;
use App\Http\Controllers\ItensCarrinhoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('Endereco', EnderecoController::class);
Route::apiResource('Imagens', ImagensController::class);
Route::apiResource('ItensCarrinho', ItensCarrinhoController::class);
Route::apiResource('Produtos', ProdutosController::class);
Route::apiResource('Usuario', UsuarioController::class);
Route::apiResource('Pedidos', PedidosController::class);


Route::delete('/api/Usuario{id}', [UsuarioController::class, 'destroy']);
Route::delete('/api/Produto{id}', [ProdutosController::class, 'destroy']);
Route::delete('/api/Pedidos{id}', [PedidosController::class, 'destroy']);
Route::delete('/api/ItensCarrinho{id}', [ItensCarrinhoController::class, 'destroy']);
Route::delete('/api/Imagens{id}', [ImagensController::class, 'destroy']);
Route::delete('/api/Endereco{id}', [EnderecoController::class, 'destroy']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\ItensCarrinhoController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ImagensController;

Route::prefix('usuarios')->group(function () {
    Route::get('/', [UsuarioController::class, 'index']);
    Route::post('/', [UsuarioController::class, 'store']);
    Route::get('{id}', [UsuarioController::class, 'show']);
    Route::put('{id}', [UsuarioController::class, 'update']);
    Route::delete('{id}', [UsuarioController::class, 'destroy']);
});

Route::prefix('pedidos')->group(function () {
    Route::get('/', [PedidosController::class, 'index']);
    Route::post('/', [PedidosController::class, 'store']);
    Route::get('{id}', [PedidosController::class, 'show']);
    Route::put('{id}', [PedidosController::class, 'update']);
    Route::delete('{id}', [PedidosController::class, 'destroy']);
});

Route::prefix('enderecos')->group(function () {
    Route::get('/', [EnderecoController::class, 'index']);
    Route::post('/', [EnderecoController::class, 'store']);
    Route::get('{id}', [EnderecoController::class, 'show']);
    Route::put('{id}', [EnderecoController::class, 'update']);
    Route::delete('{id}', [EnderecoController::class, 'destroy']);
});

Route::prefix('itens-carrinho')->group(function () {
    Route::get('/', [ItensCarrinhoController::class, 'index']);
    Route::post('/', [ItensCarrinhoController::class, 'store']);
    Route::get('{id}', [ItensCarrinhoController::class, 'show']);
    Route::put('{id}', [ItensCarrinhoController::class, 'update']);
    Route::delete('{id}', [ItensCarrinhoController::class, 'destroy']);
});

Route::prefix('produtos')->group(function () {
    Route::get('/', [ProdutosController::class, 'index']);
    Route::post('/', [ProdutosController::class, 'store']);
    Route::get('{id}', [ProdutosController::class, 'show']);
    Route::put('{id}', [ProdutosController::class, 'update']);
    Route::delete('{id}', [ProdutosController::class, 'destroy']);
});

Route::prefix('imagens')->group(function () {
    Route::get('/', [ImagensController::class, 'index']);
    Route::post('/', [ImagensController::class, 'store']);
    Route::get('{id}', [ImagensController::class, 'show']);
    Route::put('{id}', [ImagensController::class, 'update']);
    Route::delete('{id}', [ImagensController::class, 'destroy']);
});

<?php

namespace App\Http\Controllers;

use App\Models\ItensCarrinho;
use Illuminate\Http\Request;

class ItensCarrinhoController extends Controller
{
    public function index()
    {
        return ItensCarrinho::with('pedido', 'produto')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Quantidade' => 'required|integer',
            'fk_Pedido_ID' => 'required|exists:pedidos,ID',
            'fk_Produtos_ID' => 'required|exists:produtos,ID',
        ]);

        return ItensCarrinho::create($request->all());
    }

    public function show($id)
    {
        return ItensCarrinho::with('pedido', 'produto')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $item = ItensCarrinho::findOrFail($id);
        $item->update($request->all());

        return $item;
    }

    public function destroy($id)
    {
        $item = ItensCarrinho::findOrFail($id);
        $item->delete();

        return response()->json(['message' => 'Item do carrinho deletado com sucesso']);
    }
}

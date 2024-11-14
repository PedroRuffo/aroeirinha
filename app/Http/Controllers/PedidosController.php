<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Pedidos;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function index()
    {
        return Pedidos::with('usuario', 'endereco')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Data' => 'required|date',
            'Tipo' => 'required|string',
            'Status' => 'required|string',
            'fk_Usuario_ID' => 'required|exists:usuarios,ID',
            'fk_Endereco_ID' => 'required|exists:enderecos,ID',
        ]);

        return Pedidos::create($request->all());
    }

    public function show($id)
    {
        return Pedidos::with('usuario', 'endereco')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $pedido = Pedidos::findOrFail($id);
        $pedido->update($request->all());

        return $pedido;
    }

    public function destroy($id)
    {
        $pedido = Pedidos::findOrFail($id);
        $pedido->delete();

        return response()->json(['message' => 'Pedidos deletado com sucesso']);
    }
}

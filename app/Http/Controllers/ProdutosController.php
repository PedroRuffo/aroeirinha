<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        return Produtos::with('imagens')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nome' => 'required|string',
            'Preco' => 'required|numeric',
            'Kg' => 'nullable|numeric',
            'Descricao' => 'nullable|string',
            'Categoria' => 'nullable|string',
        ]);

        return Produtos::create($request->all());
    }

    public function show($id)
    {
        return Produtos::with('imagens')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->update($request->all());

        return $produto;
    }

    public function destroy($id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->delete();

        return response()->json(['message' => 'Produto deletado com sucesso']);
    }
}

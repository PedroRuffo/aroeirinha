<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    public function index()
    {
        return Endereco::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'CEP' => 'required|string',
            'Rua' => 'required|string',
            'Numero' => 'required|integer',
            'Cidade' => 'required|string',
            'Bairro' => 'required|string',
            'Estado' => 'required|string',
            'Complemento' => 'nullable|string',
        ]);

        return Endereco::create($request->all());
    }

    public function show($id)
    {
        return Endereco::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->update($request->all());

        return $endereco;
    }

    public function destroy($id)
    {
        $endereco = Endereco::findOrFail($id);
        $endereco->delete();

        return response()->json(['message' => 'Endereço deletado com sucesso']);
    }
}

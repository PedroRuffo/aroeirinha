<?php

namespace App\Http\Controllers;

use App\Models\Imagens;
use Illuminate\Http\Request;

class ImagensController extends Controller
{
    public function index()
    {
        return Imagens::with('produto')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nome' => 'required|string',
            'Url' => 'required|string',
            'fk_Produtos_ID' => 'required|exists:produtos,ID',
        ]);

        return Imagens::create($request->all());
    }

    public function show($id)
    {
        return Imagens::with('produto')->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $imagem = Imagens::findOrFail($id);
        $imagem->update($request->all());

        return $imagem;
    }

    public function destroy($id)
    {
        $imagem = Imagens::findOrFail($id);
        $imagem->delete();

        return response()->json(['message' => 'Imagem deletada com sucesso']);
    }
}

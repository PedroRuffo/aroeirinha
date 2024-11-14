<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'CPF' => 'required|unique:usuarios',
            'Nome' => 'required|string',
            'Email' => 'required|email|unique:usuarios',
            'Telefone' => 'nullable|string',
            'Senha' => 'required|string',
        ]);

        return Usuario::create($request->all());
    }

    public function show($id)
    {
        return Usuario::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return $usuario;
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return response()->json(['message' => 'Usuário deletado com sucesso']);
    }
}

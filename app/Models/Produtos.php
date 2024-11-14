<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'produtos';
    protected $fillable = ['Nome', 'Preco', 'Kg', 'Descricao', 'Categoria'];

    public function itensCarrinho()
    {
        return $this->hasMany(ItensCarrinho::class, 'fk_Produtos_ID');
    }

    public function imagens()
    {
        return $this->hasMany(Imagens::class, 'fk_Produtos_ID');
    }
}

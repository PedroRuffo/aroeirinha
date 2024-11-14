<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';
    protected $fillable = ['CEP', 'Rua', 'Numero', 'Cidade', 'Bairro', 'Estado', 'Complemento'];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class, 'fk_Endereco_ID');
    }
}

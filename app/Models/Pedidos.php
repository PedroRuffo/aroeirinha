<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $table = 'pedidos';
    protected $fillable = ['Data', 'Tipo', 'Status', 'fk_Usuario_ID', 'fk_Endereco_ID'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'fk_Usuario_ID');
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class, 'fk_Endereco_ID');
    }

    public function itensCarrinho()
    {
        return $this->hasMany(ItensCarrinho::class, 'fk_Pedido_ID');
    }
}

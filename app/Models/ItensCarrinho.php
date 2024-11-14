<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensCarrinho extends Model
{
    use HasFactory;

    protected $table = 'itens_carrinho';
    protected $fillable = ['Quantidade', 'fk_Pedido_ID', 'fk_Produtos_ID'];

    public function pedido()
    {
        return $this->belongsTo(Pedidos::class, 'fk_Pedido_ID');
    }

    public function produto()
    {
        return $this->belongsTo(Produtos::class, 'fk_Produtos_ID');
    }
}

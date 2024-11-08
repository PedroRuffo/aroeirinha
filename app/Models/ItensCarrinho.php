<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensCarrinho extends Model
{
    protected $fillable =['quantidade'];
    use HasFactory;

//     public function pedidos(){
//     return $this->belongsTo(Pedidos::class);
// }
// public function produtos(){
//     return $this->hasMany(Produtos::class);
// }
}

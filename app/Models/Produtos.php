<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable =['nome','descricao','preco','kg','categoria'];
    use HasFactory;
//     public function imagens(){
//     return $this->hasMany(Imagens::class);
// }
//     public function itenscarrinhos(){
//         return $this->belongsTo(ItensCarrinho::class);
// }
}

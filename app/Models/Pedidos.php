<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable =['data','tipo','status'];
    use HasFactory;
//     public function usuario(){
//     return $this->belongsTo(Usuario::class);
// }
// public function itenscarrinhos(){
//     return $this->hasMany(ItensCarrinho::class);
// }
// public function endereco(){
//     return $this->hasOne(Endereco::class);
// }
}

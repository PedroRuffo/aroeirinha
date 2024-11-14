<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $fillable = ['CPF', 'Nome', 'Email', 'Telefone', 'Senha'];

    public function pedidos()
    {
        return $this->hasMany(Pedidos::class, 'fk_Usuario_ID');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagens extends Model
{
    use HasFactory;

    protected $table = 'imagens';
    protected $fillable = ['Nome', 'Url', 'fk_Produtos_ID'];

    public function produto()
    {
        return $this->belongsTo(Produtos::class, 'fk_Produtos_ID');
    }
}

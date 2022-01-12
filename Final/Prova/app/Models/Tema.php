<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $fillable = [
        'desdricao',
        'ordem',
    ];

    // 1-Tema tem muitos votos
    public function votos(){
        return $this->hasMany(Voto::class);
    }
}

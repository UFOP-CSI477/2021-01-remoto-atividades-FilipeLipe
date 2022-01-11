<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    use HasFactory;

    protected $fillable = ['tema_id', 'opcao'];
    //protected $guarded = ['admin']; //Para não persistir algum dado no banco
}

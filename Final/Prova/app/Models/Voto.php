<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'tema_id', 'opcao', 'data'];
    //protected $guarded = ['admin']; //Para não persistir algum dado no banco

    public function tema(){
        return $this->belongsTo(Tema::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

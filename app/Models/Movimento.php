<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    use HasFactory;
    //Inserir aqui o relacionamento entre tabelas
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

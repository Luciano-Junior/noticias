<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'titulo',
        'descricao',
        'data',
        'autor',
        'categoria'
    ];

    protected $dates = ['data'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $tabe = 'categoria';
    protected $primarykey = 'id_categoria';

    public $timestamps = false;
    protected $fillable = [
        'nome',
        'descricao',
        'condicao'
    ];

    //protected $guarded[];
}


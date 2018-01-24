<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itens extends Model
{
    protected $fillable = [
        'id',
        'code',
        'name',
        'curriculum',
        'load'

    ];
    protected $table = 'disciplines';
}

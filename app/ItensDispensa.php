<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItensDispensa extends Model
{
    protected $fillable = [
    'id',
    'atividade',
    'codigo',
    'cargahoraria',
    'natureza'

];
    protected $table = 'itensdispensa';

}

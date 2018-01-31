<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    protected $fillable = [
        'id',
        'name',
        'code',
        'curriculum',
        'area_id'

    ];
    protected $table = 'courses';
}

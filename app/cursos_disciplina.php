<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cursos_disciplina extends Model
{
    protected $fillable = [
        'id',
        'semester',
        'nature',
        'course_id',
        'discipline_id'

    ];
    protected $table = 'course_disciplines';
}

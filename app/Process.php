<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'processes';

    protected $primaryKey = 'id';
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'number',
        'student',
        'course',
        'curriculum',
        'reference'
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];
}

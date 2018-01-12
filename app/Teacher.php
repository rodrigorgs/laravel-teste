<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teachers';

    protected $primaryKey = 'id';


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}

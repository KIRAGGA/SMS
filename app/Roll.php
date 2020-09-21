<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roll extends Model
{
    Use SoftDeletes;
    public $fillable = [
        'student_id', 'username', 'password', 'login_time', 'logout_time'
    ];
    protected $primaryKey = 'roll_id';

}

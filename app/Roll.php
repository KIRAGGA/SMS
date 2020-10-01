<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\models\Admission;
use Session;
class Roll extends Model
{
    Use SoftDeletes;
    public $fillable = [
        'student_id', 'username', 'password', 'login_time', 'logout_time'
    ];
    protected $primaryKey = 'roll_id';


    public static function onlineStudent(){
        $students = Roll::join('admissions','admissions.student_id', '=' , 'rolls.student_id')
        ->where(['username' => Session::get('studentSession')])->first(); //joining student with admission
        return $students;
    }

}

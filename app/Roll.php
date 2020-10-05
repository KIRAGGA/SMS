<?php

namespace App;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use App\models\Admission;
use App\Student;
use Session;
class Roll extends Model
{
    Use SoftDeletes;
    public $fillable = [
        'student_id', 'username', 'password', 'login_time', 'logout_time'
    ];
    protected $primaryKey = 'roll_id';


    public static function onlineStudent(){
        $students = DB::table('admissions')->select(
            'rolls.*'
            )
        ->join('rolls','rolls.student_id', '=' , 'admissions.student_id')
        // $students = Roll::join('admissions','admissions.student_id', '=' , 'rolls.student_id')
        ->where(['username' => Session::get('studentSession')]); //joining student with admission
        return $students;
    }

}

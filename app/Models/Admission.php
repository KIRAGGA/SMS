<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Admission
 * @package App\Models
 * @version August 25, 2020, 11:17 pm UTC
 *
 * @property integer batch_id
 * @property string $first_name
 * @property string $last_name
 * @property string $father_name
 * @property string $father_phone
 * @property string $mother_name
 * @property string $mother_phone
 * @property boolean $gender
 * @property string $email
 * @property string $dob
 * @property string $phone
 * @property string $address
 * @property string $current_address
 * @property string $nationality
 * @property string $passport
 * @property boolean $status
 * @property string $dateregistered
 * @property string $user_id
 * @property string $class_id
 * @property string $image
 */
class Admission extends Model
{
    use SoftDeletes;

    public $table = 'admissions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'student_id';


    public $fillable = [
        'batch_id',
        'first_name',
        'last_name',
        'father_name',
        'father_phone',
        'mother_name',
        'mother_phone',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'current_address',
        'nationality',
        'passport',
        'status',
        'dateregistered',
        'user_id',
        'department_id',
        'faculty_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'student_id' => 'integer',
        'batch_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'father_name' => 'string',
        'father_phone' => 'string',
        'mother_name' => 'string',
        'mother_phone' => 'string',
        'gender' => 'boolean',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'current_address' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'dateregistered' => 'date',
        'user_id' => 'string',
        'department_id' => 'integer',
        'faculty_id' =>'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'batch_id' => 'required|integer|max:20',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'father_name' => 'required|string|max:255',
        'father_phone' => 'required|string|max:255',
        'mother_name' => 'required|string|max:255',
        'mother_phone' => 'required|string|max:255',
        'gender' => 'required|boolean',
        'email' => 'required|string|max:255',
        'dob' => 'required',
        'phone' => 'required|string|max:255',
        'address' => 'required|string',
        'current_address' => 'required|string',
        'nationality' => 'required|string|max:255',
        'passport' => 'required|string|max:255',
        'status' => 'required|boolean',
        'dateregistered' => 'required',
        'user_id' => 'required|string|max:255',
        'department_id' => 'required|integer',
        'faculty_id' => 'required|integer',
        'image' => 'nullable|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}

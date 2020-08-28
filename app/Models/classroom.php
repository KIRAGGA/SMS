<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class classroom
 * @package App\Models
 * @version August 25, 2020, 10:57 pm UTC
 *
 * @property string $classroom_name
 * @property integer $classcode_name
 * @property string $classroom_description
 * @property boolean $classroom_status
 */
class classroom extends Model
{
    use SoftDeletes;

    public $table = 'classrooms';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    protected $primaryKey = 'classroom_id';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'classroom_name',
        'classcode_name',
        'classroom_description',
        'classroom_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'classroom_id' => 'integer',
        'classroom_name' => 'string',
        'classcode_name' => 'integer',
        'classroom_description' => 'string',
        'classroom_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'classroom_name' => 'required|string|max:255',
        'classcode_name' => 'required|integer',
        'classroom_description' => 'required|string',
        'classroom_status' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}

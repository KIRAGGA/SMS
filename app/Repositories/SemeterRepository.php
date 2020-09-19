<?php

namespace App\Repositories;

use App\Models\Semeter;
use App\Repositories\BaseRepository;

/**
 * Class SemeterRepository
 * @package App\Repositories
 * @version September 19, 2020, 4:02 pm UTC
*/

class SemeterRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'semester_name',
        'semester_code',
        'semester_duration',
        'semester_description'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Semeter::class;
    }
}

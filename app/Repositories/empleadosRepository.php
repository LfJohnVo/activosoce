<?php

namespace App\Repositories;

use App\Models\empleados;
use App\Repositories\BaseRepository;

/**
 * Class empleadosRepository
 * @package App\Repositories
 * @version August 10, 2021, 4:31 pm UTC
*/

class empleadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return empleados::class;
    }
}

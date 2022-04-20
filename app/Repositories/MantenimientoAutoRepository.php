<?php

namespace App\Repositories;

use App\Models\MantenimientoAuto;
use App\Repositories\BaseRepository;

/**
 * Class MantenimientoAutoRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:32 am UTC
*/

class MantenimientoAutoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idAuto',
        'idTaller',
        'kilometraje',
        'fechaIngreso',
        'fechaEntrega',
        'motivoIngreso'
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
        return MantenimientoAuto::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Empleado;
use App\Repositories\BaseRepository;

/**
 * Class EmpleadoRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:30 am UTC
*/

class EmpleadoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'numeroEmpleado',
        'nombres',
        'apellidoPaterno',
        'apellidoMaterno',
        'idProyecto',
        'email'
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
        return Empleado::class;
    }
}

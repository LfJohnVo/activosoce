<?php

namespace App\Repositories;

use App\Models\Auto;
use App\Repositories\BaseRepository;

/**
 * Class AutoRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:21 am UTC
*/

class AutoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idTipo',
        'idMarca',
        'idmodelo',
        'idEmpleado',
        'foto',
        'color',
        'placas',
        'anio',
        'precio_Compra',
        'kmInicial',
        'kmFinal',
        'estatus'
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
        return Auto::class;
    }
}

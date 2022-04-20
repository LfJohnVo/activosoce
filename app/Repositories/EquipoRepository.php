<?php

namespace App\Repositories;

use App\Models\Equipo;
use App\Repositories\BaseRepository;

/**
 * Class EquipoRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:31 am UTC
*/

class EquipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idTipoEquipo',
        'idEmpleado',
        'idMarca',
        'idModelo',
        'idRam',
        'idDiscoDuro',
        'foto',
        'numeroSerie',
        'precioCompra',
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
        return Equipo::class;
    }
}

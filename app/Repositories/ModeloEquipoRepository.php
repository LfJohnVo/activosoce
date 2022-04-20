<?php

namespace App\Repositories;

use App\Models\ModeloEquipo;
use App\Repositories\BaseRepository;

/**
 * Class ModeloEquipoRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:26 am UTC
*/

class ModeloEquipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_marca',
        'modelo',
        'anio'
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
        return ModeloEquipo::class;
    }
}

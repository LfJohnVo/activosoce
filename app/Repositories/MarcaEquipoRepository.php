<?php

namespace App\Repositories;

use App\Models\MarcaEquipo;
use App\Repositories\BaseRepository;

/**
 * Class MarcaEquipoRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:25 am UTC
*/

class MarcaEquipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_tipoEquipo',
        'marca',
        'fabricante'
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
        return MarcaEquipo::class;
    }
}

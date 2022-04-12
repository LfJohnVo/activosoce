<?php

namespace App\Repositories;

use App\Models\Arrendadora;
use App\Repositories\BaseRepository;

/**
 * Class ArrendadoraRepository
 * @package App\Repositories
 * @version July 6, 2021, 6:17 am UTC
*/

class ArrendadoraRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombre',
        'razonSocial',
        'rfc',
        'direccion',
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
        return Arrendadora::class;
    }
}

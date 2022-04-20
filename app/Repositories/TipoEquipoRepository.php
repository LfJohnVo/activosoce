<?php

namespace App\Repositories;

use App\Models\TipoEquipo;
use App\Repositories\BaseRepository;

/**
 * Class TipoEquipoRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:28 am UTC
*/

class TipoEquipoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoEquipo'
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
        return TipoEquipo::class;
    }
}

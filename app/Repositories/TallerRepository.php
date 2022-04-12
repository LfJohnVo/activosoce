<?php

namespace App\Repositories;

use App\Models\Taller;
use App\Repositories\BaseRepository;

/**
 * Class TallerRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:33 am UTC
*/

class TallerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nombreTaller',
        'direccion',
        'telefono',
        'emal',
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
        return Taller::class;
    }
}

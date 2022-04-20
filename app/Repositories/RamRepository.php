<?php

namespace App\Repositories;

use App\Models\Ram;
use App\Repositories\BaseRepository;

/**
 * Class RamRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:27 am UTC
*/

class RamRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoMemoria',
        'capacidad'
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
        return Ram::class;
    }
}

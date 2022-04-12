<?php

namespace App\Repositories;

use App\Models\DiscoDuro;
use App\Repositories\BaseRepository;

/**
 * Class DiscoDuroRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:24 am UTC
*/

class DiscoDuroRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipoDiscoDuro',
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
        return DiscoDuro::class;
    }
}

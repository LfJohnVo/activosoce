<?php

namespace App\Repositories;

use App\Models\Tenencia;
use App\Repositories\BaseRepository;

/**
 * Class TenenciaRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:34 am UTC
*/

class TenenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idTenencias',
        'anio',
        'idDocumentoAuto'
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
        return Tenencia::class;
    }
}

<?php

namespace App\Repositories;

use App\Models\Verificacion;
use App\Repositories\BaseRepository;

/**
 * Class VerificacionRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:35 am UTC
*/

class VerificacionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idDocumentosAutos',
        'verificacion',
        'bimestre'
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
        return Verificacion::class;
    }
}

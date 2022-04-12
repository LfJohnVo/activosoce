<?php

namespace App\Repositories;

use App\Models\DocumentoAuto;
use App\Repositories\BaseRepository;

/**
 * Class DocumentoAutoRepository
 * @package App\Repositories
 * @version June 17, 2021, 5:30 am UTC
*/

class DocumentoAutoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'idAuto',
        'tarjeton',
        'factura',
        'responsivaEmpleado',
        'ultimaTenencia',
        'ultimaVerificacion'
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
        return DocumentoAuto::class;
    }
}

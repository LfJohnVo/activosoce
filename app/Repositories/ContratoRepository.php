<?php

namespace App\Repositories;

use App\Models\Contrato;
use App\Repositories\BaseRepository;

/**
 * Class ContratoRepository
 * @package App\Repositories
 * @version July 6, 2021, 6:21 am UTC
*/

class ContratoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_arrendadora',
        'plazo',
        'fecha_inicio',
        'fecha_final',
        'monto_inicial',
        'monto_mensualidad',
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
        return Contrato::class;
    }
}

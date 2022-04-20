<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DocumentoAuto
 * @package App\Models
 * @version June 17, 2021, 5:30 am UTC
 *
 * @property integer $idAuto
 * @property string $tarjeton
 * @property string $factura
 * @property string $responsivaEmpleado
 * @property string $ultimaTenencia
 * @property string $ultimaVerificacion
 */
class DocumentoAuto extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'documentosAutos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idAuto',
        'tarjeton',
        'factura',
        'responsivaEmpleado',
        'ultimaTenencia',
        'ultimaVerificacion'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idAuto' => 'integer',
        'tarjeton' => 'string',
        'factura' => 'string',
        'responsivaEmpleado' => 'string',
        'ultimaTenencia' => 'string',
        'ultimaVerificacion' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idAuto' => 'nullable|integer',
        'tarjeton' => 'nullable',
        'factura' => 'nullable',
        'responsivaEmpleado' => 'nullable',
        'ultimaTenencia' => 'nullable',
        'ultimaVerificacion' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function auto()
	{
		return $this->belongsTo(Auto::class, 'idAuto');
	}
}

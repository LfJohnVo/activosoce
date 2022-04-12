<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MantenimientoAuto
 * @package App\Models
 * @version June 17, 2021, 5:32 am UTC
 *
 * @property integer $idAuto
 * @property integer $idTaller
 * @property integer $kilometraje
 * @property string $fechaIngreso
 * @property string $fechaEntrega
 * @property string $motivoIngreso
 */
class MantenimientoAuto extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'mantenimientoAutos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idAuto',
        'idTaller',
        'kilometraje',
        'fechaIngreso',
        'fechaEntrega',
        'motivoIngreso'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idAuto' => 'integer',
        'idTaller' => 'integer',
        'kilometraje' => 'integer',
        'fechaIngreso' => 'date',
        'fechaEntrega' => 'date',
        'motivoIngreso' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idAuto' => 'nullable|integer',
        'idTaller' => 'nullable|integer',
        'kilometraje' => 'nullable|integer',
        'fechaIngreso' => 'nullable',
        'fechaEntrega' => 'nullable',
        'motivoIngreso' => 'nullable|string|max:2000',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function auto()
	{
		return $this->belongsTo(Auto::class, 'idAuto');
	}

	public function tallere()
	{
		return $this->belongsTo(Tallere::class, 'idTaller');
	}

}

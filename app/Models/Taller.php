<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Taller
 * @package App\Models
 * @version June 17, 2021, 5:33 am UTC
 *
 * @property string $nombreTaller
 * @property string $direccion
 * @property string $telefono
 * @property string $emal
 * @property string $estatus
 */
class Taller extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'talleres';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'nombreTaller',
        'direccion',
        'telefono',
        'emal',
        'estatus'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nombreTaller' => 'string',
        'direccion' => 'string',
        'telefono' => 'string',
        'emal' => 'string',
        'estatus' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nombreTaller' => 'nullable|string|max:150',
        'direccion' => 'nullable|string|max:1000',
        'telefono' => 'nullable|string|max:55',
        'emal' => 'nullable|string|max:100',
        'estatus' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function mantenimiento_autos()
	{
		return $this->hasMany(MantenimientoAuto::class, 'idTaller');
	}
}

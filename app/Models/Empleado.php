<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Empleado
 * @package App\Models
 * @version June 17, 2021, 5:30 am UTC
 *
 * @property integer $numeroEmpleado
 * @property string $nombres
 * @property string $apellidoPaterno
 * @property string $apellidoMaterno
 * @property integer $idProyecto
 * @property string $email
 */
class Empleado extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'empleados';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'numeroEmpleado',
        'nombres',
        'apellidoPaterno',
        'apellidoMaterno',
        'idProyecto',
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numeroEmpleado' => 'integer',
        'nombres' => 'string',
        'apellidoPaterno' => 'string',
        'apellidoMaterno' => 'string',
        'idProyecto' => 'integer',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numeroEmpleado' => 'nullable|integer',
        'nombres' => 'nullable|string|max:100',
        'apellidoPaterno' => 'nullable|string|max:100',
        'apellidoMaterno' => 'nullable|string|max:100',
        'idProyecto' => 'nullable|integer',
        'email' => 'nullable|string|max:150',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Tenencia
 * @package App\Models
 * @version June 17, 2021, 5:34 am UTC
 *
 * @property integer $idTenencias
 * @property integer $anio
 * @property integer $idDocumentoAuto
 */
class Tenencia extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'tenencias';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idTenencias',
        'anio',
        'idDocumentoAuto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idTenencias' => 'integer',
        'anio' => 'integer',
        'idDocumentoAuto' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idTenencias' => 'nullable|integer',
        'anio' => 'nullable|integer',
        'idDocumentoAuto' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


}

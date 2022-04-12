<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Verificacion
 * @package App\Models
 * @version June 17, 2021, 5:35 am UTC
 *
 * @property integer $idDocumentosAutos
 * @property string $verificacion
 * @property string $bimestre
 */
class Verificacion extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'verificaciones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'idDocumentosAutos',
        'verificacion',
        'bimestre'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'idDocumentosAutos' => 'integer',
        'verificacion' => 'string',
        'bimestre' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'idDocumentosAutos' => 'nullable|integer',
        'verificacion' => 'nullable|string',
        'bimestre' => 'nullable|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}

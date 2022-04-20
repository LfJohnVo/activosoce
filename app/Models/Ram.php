<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Ram
 * @package App\Models
 * @version June 17, 2021, 5:27 am UTC
 *
 * @property string $tipoMemoria
 * @property string $capacidad
 */
class Ram extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cat_Ram';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipoMemoria',
        'capacidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipoMemoria' => 'string',
        'capacidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipoMemoria' => 'nullable|string|max:10',
        'capacidad' => 'nullable|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}

<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class DiscoDuro
 * @package App\Models
 * @version June 17, 2021, 5:24 am UTC
 *
 * @property string $tipoDiscoDuro
 * @property string $capacidad
 */
class DiscoDuro extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cat_DiscoDuro';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'tipoDiscoDuro',
        'capacidad'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tipoDiscoDuro' => 'string',
        'capacidad' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipoDiscoDuro' => 'nullable|string|max:45',
        'capacidad' => 'nullable|string|max:45',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}

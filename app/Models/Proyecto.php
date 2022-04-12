<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Proyecto
 * @package App\Models
 * @version June 17, 2021, 5:32 am UTC
 *
 * @property integer $numeroProyecto
 * @property string $nombreProyecto
 * @property string $estatus
 */
class Proyecto extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'proyectos';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'numeroProyecto',
        'nombreProyecto',
        'estatus'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numeroProyecto' => 'integer',
        'nombreProyecto' => 'string',
        'estatus' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numeroProyecto' => 'nullable|integer',
        'nombreProyecto' => 'nullable|string|max:255',
        'estatus' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}

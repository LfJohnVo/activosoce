<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class ModeloEquipo
 * @package App\Models
 * @version June 17, 2021, 5:26 am UTC
 *
 * @property integer $id_marca
 * @property string $modelo
 * @property integer $anio
 */
class ModeloEquipo extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cat_ModelosEquipos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_marca',
        'modelo',
        'anio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_marca' => 'integer',
        'modelo' => 'string',
        'anio' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_marca' => 'nullable|integer',
        'modelo' => 'nullable|string|max:255',
        'anio' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function cat_marcas_equipo()
	{
		return $this->belongsTo(CatMarcasEquipo::class, 'id_marca');
	}

	public function autos()
	{
		return $this->hasMany(Auto::class, 'idmodelo');
	}

}

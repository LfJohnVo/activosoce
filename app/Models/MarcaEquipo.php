<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class MarcaEquipo
 * @package App\Models
 * @version June 17, 2021, 5:25 am UTC
 *
 * @property integer $id_tipoEquipo
 * @property string $marca
 * @property string $fabricante
 */
class MarcaEquipo extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'cat_MarcasEquipos';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'id_tipoEquipo',
        'marca',
        'fabricante'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_tipoEquipo' => 'integer',
        'marca' => 'string',
        'fabricante' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_tipoEquipo' => 'nullable|integer',
        'marca' => 'nullable|string|max:100',
        'fabricante' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function cat_tipos_equipo()
	{
		return $this->belongsTo(CatTiposEquipo::class, 'id_tipoEquipo');
	}

	public function autos()
	{
		return $this->hasMany(Auto::class, 'idMarca');
	}

	public function cat_modelos_equipos()
	{
		return $this->hasMany(CatModelosEquipo::class, 'id_marca');
	}

}

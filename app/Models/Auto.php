<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Auto
 *
 * @property int $id
 * @property int|null $idTipo
 * @property int|null $idMarca
 * @property int|null $idmodelo
 * @property int|null $idEmpleado
 * @property string|null $foto
 * @property string|null $color
 * @property string|null $placas
 * @property int|null $anio
 * @property float|null $precio_Compra
 * @property int|null $kmInicial
 * @property int|null $kmFinal
 * @property string|null $estatus
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property CatMarcasEquipo|null $cat_marcas_equipo
 * @property CatModelosEquipo|null $cat_modelos_equipo
 * @property CatTiposEquipo|null $cat_tipos_equipo
 * @property Collection|DocumentosAuto[] $documentos_autos
 *
 * @package App\Models
 */
class Auto extends Model
{
    use SoftDeletes;
    protected $table = 'autos';
    protected $dates = ['deleted_at'];

    protected $casts = [
        'idTipo' => 'int',
        'idMarca' => 'int',
        'idmodelo' => 'int',
        'idEmpleado' => 'int',
        'anio' => 'int',
        'precio_Compra' => 'float',
        'kmInicial' => 'int',
        'kmFinal' => 'int'
    ];

    protected $fillable = [
        'idTipo',
        'idMarca',
        'idmodelo',
        'idEmpleado',
        'foto',
        'color',
        'placas',
        'numeroSerie',
        'numeroMotor',
        'anio',
        'precio_Compra',
        'kmInicial',
        'kmFinal',
        'estatus'
    ];

    public static $rules = [
        'idTipo' => 'nullable|integer',
        'idMarca' => 'nullable|integer',
        'idmodelo' => 'nullable|integer',
        'idEmpleado' => 'nullable|integer',
        //'foto' => 'nullable|string',
        'color' => 'nullable|string|max:45',
        'placas' => 'nullable|string|max:45',
        'numeroSerie' => 'nullable|string|max:45',
        'numeroMotor' => 'nullable|string|max:45',
        'anio' => 'nullable|integer',
        'precio_Compra' => 'nullable|numeric',
        'kmInicial' => 'nullable|integer',
        'kmFinal' => 'nullable|integer',
        'estatus' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public function cat_marcas_equipo()
    {
        return $this->belongsTo(CatMarcasEquipo::class, 'idMarca');
    }

    public function cat_modelos_equipo()
    {
        return $this->belongsTo(CatModelosEquipo::class, 'idmodelo');
    }

    public function cat_tipos_equipo()
    {
        return $this->belongsTo(CatTiposEquipo::class, 'idTipo');
    }

    public function documentos_autos()
    {
        return $this->hasMany(DocumentosAuto::class, 'idAuto');
    }

    public function mantenimiento_autos()
    {
        return $this->hasMany(MantenimientoAuto::class, 'idAuto');
    }
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Equipo
 * 
 * @property int $id
 * @property int|null $idTipoEquipo
 * @property int|null $idEmpleado
 * @property int|null $idMarca
 * @property int|null $idModelo
 * @property int|null $idRam
 * @property int|null $idDiscoDuro
 * @property int|null $idContrato
 * @property string|null $foto
 * @property string|null $numeroSerie
 * @property float|null $precioCompra
 * @property string|null $arrendado
 * @property string|null $estatus
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property CatTiposEquipo|null $cat_tipos_equipo
 *
 * @package App\Models
 */
class Equipo extends Model
{
	use SoftDeletes;
	protected $table = 'equipos';

	protected $casts = [
		'idTipoEquipo' => 'int',
		'idEmpleado' => 'int',
		'idMarca' => 'int',
		'idModelo' => 'int',
		'idRam' => 'int',
		'idDiscoDuro' => 'int',
		'idContrato' => 'int',
		'precioCompra' => 'float'
	];

	protected $fillable = [
		'idTipoEquipo',
		'idEmpleado',
		'idMarca',
		'idModelo',
		'idRam',
		'idDiscoDuro',
		'idContrato',
		'foto',
		'numeroSerie',
		'precioCompra',
		'arrendado',
		'estatus'
	];

	public function cat_tipos_equipo()
	{
		return $this->belongsTo(CatTiposEquipo::class, 'idTipoEquipo');
	}
}

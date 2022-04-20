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
 * Class CatModelosEquipo
 * 
 * @property int $id
 * @property int|null $id_marca
 * @property string|null $modelo
 * @property int|null $anio
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property CatMarcasEquipo|null $cat_marcas_equipo
 * @property Collection|Auto[] $autos
 *
 * @package App\Models
 */
class CatModelosEquipo extends Model
{
	use SoftDeletes;
	protected $table = 'cat_ModelosEquipos';

	protected $casts = [
		'id_marca' => 'int',
		'anio' => 'int'
	];

	protected $fillable = [
		'id_marca',
		'modelo',
		'anio'
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

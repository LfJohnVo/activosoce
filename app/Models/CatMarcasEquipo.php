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
 * Class CatMarcasEquipo
 * 
 * @property int $id
 * @property int|null $id_tipoEquipo
 * @property string|null $marca
 * @property string|null $fabricante
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property CatTiposEquipo|null $cat_tipos_equipo
 * @property Collection|Auto[] $autos
 * @property Collection|CatModelosEquipo[] $cat_modelos_equipos
 *
 * @package App\Models
 */
class CatMarcasEquipo extends Model
{
	use SoftDeletes;
	protected $table = 'cat_MarcasEquipos';

	protected $casts = [
		'id_tipoEquipo' => 'int'
	];

	protected $fillable = [
		'id_tipoEquipo',
		'marca',
		'fabricante'
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

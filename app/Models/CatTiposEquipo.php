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
 * Class CatTiposEquipo
 * 
 * @property int $id
 * @property string|null $tipoEquipo
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|Auto[] $autos
 * @property Collection|CatMarcasEquipo[] $cat_marcas_equipos
 * @property Collection|Equipo[] $equipos
 *
 * @package App\Models
 */
class CatTiposEquipo extends Model
{
	use SoftDeletes;
	protected $table = 'cat_tiposEquipos';

	protected $fillable = [
		'tipoEquipo'
	];

	public function autos()
	{
		return $this->hasMany(Auto::class, 'idTipo');
	}

	public function cat_marcas_equipos()
	{
		return $this->hasMany(CatMarcasEquipo::class, 'id_tipoEquipo');
	}

	public function equipos()
	{
		return $this->hasMany(Equipo::class, 'idTipoEquipo');
	}
}

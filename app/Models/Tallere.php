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
 * Class Tallere
 * 
 * @property int $id
 * @property string|null $nombreTaller
 * @property string|null $direccion
 * @property string|null $telefono
 * @property string|null $emal
 * @property string|null $estatus
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 * 
 * @property Collection|MantenimientoAuto[] $mantenimiento_autos
 *
 * @package App\Models
 */
class Tallere extends Model
{
	use SoftDeletes;
	protected $table = 'talleres';

	protected $fillable = [
		'nombreTaller',
		'direccion',
		'telefono',
		'emal',
		'estatus'
	];

	public function mantenimiento_autos()
	{
		return $this->hasMany(MantenimientoAuto::class, 'idTaller');
	}
}

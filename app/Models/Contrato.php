<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contrato
 * 
 * @property int $id
 * @property int $id_arrendadora
 * @property string|null $plazo
 * @property Carbon|null $fecha_inicio
 * @property Carbon|null $fecha_final
 * @property float|null $monto_inicial
 * @property float|null $monto_mensualidad
 * @property string|null $estatus
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property Arrendadora $arrendadora
 *
 * @package App\Models
 */
class Contrato extends Model
{
	use SoftDeletes;
	protected $table = 'contratos';

	protected $casts = [
		'id_arrendadora' => 'int',
		'monto_inicial' => 'float',
		'monto_mensualidad' => 'float'
	];

	protected $dates = [
		'fecha_inicio',
		'fecha_final'
	];

	protected $fillable = [
		'id_arrendadora',
		'plazo',
		'fecha_inicio',
		'fecha_final',
		'monto_inicial',
		'monto_mensualidad',
		'estatus'
	];

	public function arrendadora()
	{
		return $this->belongsTo(Arrendadora::class, 'id_arrendadora');
	}
}

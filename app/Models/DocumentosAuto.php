<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class DocumentosAuto
 *
 * @property int $id
 * @property int|null $idAuto
 * @property string|null $tarjeton
 * @property string|null $factura
 * @property string|null $responsivaEmpleado
 * @property string|null $ultimaTenencia
 * @property string|null $ultimaVerificacion
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $deleted_at
 *
 * @property Auto|null $auto
 *
 * @package App\Models
 */
class DocumentosAuto extends Model
{
	use SoftDeletes;
	protected $table = 'documentosAutos';

	protected $casts = [
		'idAuto' => 'int'
	];

	protected $fillable = [
		'idAuto',
		'tarjeton',
		'factura',
		'responsivaEmpleado',
		'ultimaTenencia',
		'ultimaVerificacion'
	];

}

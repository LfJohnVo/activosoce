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
 * Class Arrendadora
 *
 * @property int $id
 * @property string $nombre
 * @property string|null $razonSocial
 * @property string $rfc
 * @property string|null $direccion
 * @property string|null $estatus
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property string $deleted_at
 *
 * @property Collection|Contrato[] $contratos
 *
 * @package App\Models
 */
class Arrendadora extends Model
{
	use SoftDeletes;
	protected $table = 'arrendadoras';

	protected $fillable = [
		'nombre',
		'razonSocial',
		'rfc',
		'direccion',
		'estatus'
	];

    public static $rules = [
        'nombre' => 'nullable|string|max:45',
        'razonsocial' => 'nullable|string|max:45',
        'rfc' => 'nullable|string|max:14',
        'direccion' => 'nullable|string|max:45',
        'estatus' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

	public function contratos()
	{
		return $this->hasMany(Contrato::class, 'id_arrendadora');
	}
}

<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idTipoEquipo' => $this->faker->randomDigitNotNull,
        'idEmpleado' => $this->faker->randomDigitNotNull,
        'idMarca' => $this->faker->randomDigitNotNull,
        'idModelo' => $this->faker->randomDigitNotNull,
        'idRam' => $this->faker->randomDigitNotNull,
        'idDiscoDuro' => $this->faker->randomDigitNotNull,
        'foto' => $this->faker->text,
        'numeroSerie' => $this->faker->word,
        'precioCompra' => $this->faker->word,
        'estatus' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

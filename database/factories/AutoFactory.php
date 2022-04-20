<?php

namespace Database\Factories;

use App\Models\Auto;
use Illuminate\Database\Eloquent\Factories\Factory;

class AutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Auto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idTipo' => $this->faker->randomDigitNotNull,
        'idMarca' => $this->faker->randomDigitNotNull,
        'idmodelo' => $this->faker->randomDigitNotNull,
        'idEmpleado' => $this->faker->randomDigitNotNull,
        'foto' => $this->faker->text,
        'color' => $this->faker->word,
        'placas' => $this->faker->word,
        'anio' => $this->faker->randomDigitNotNull,
        'precio_Compra' => $this->faker->word,
        'kmInicial' => $this->faker->randomDigitNotNull,
        'kmFinal' => $this->faker->randomDigitNotNull,
        'estatus' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

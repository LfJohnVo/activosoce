<?php

namespace Database\Factories;

use App\Models\ModeloEquipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModeloEquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ModeloEquipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_marca' => $this->faker->randomDigitNotNull,
        'modelo' => $this->faker->word,
        'anio' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

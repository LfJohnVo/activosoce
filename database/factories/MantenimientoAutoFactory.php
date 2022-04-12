<?php

namespace Database\Factories;

use App\Models\MantenimientoAuto;
use Illuminate\Database\Eloquent\Factories\Factory;

class MantenimientoAutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MantenimientoAuto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idAuto' => $this->faker->randomDigitNotNull,
        'idTaller' => $this->faker->randomDigitNotNull,
        'kilometraje' => $this->faker->randomDigitNotNull,
        'fechaIngreso' => $this->faker->word,
        'fechaEntrega' => $this->faker->word,
        'motivoIngreso' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

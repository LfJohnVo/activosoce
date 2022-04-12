<?php

namespace Database\Factories;

use App\Models\Arrendadora;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArrendadoraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Arrendadora::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
        'razonSocial' => $this->faker->word,
        'rfc' => $this->faker->word,
        'direccion' => $this->faker->word,
        'estatus' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

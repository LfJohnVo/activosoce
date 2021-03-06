<?php

namespace Database\Factories;

use App\Models\Taller;
use Illuminate\Database\Eloquent\Factories\Factory;

class TallerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Taller::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreTaller' => $this->faker->word,
        'direccion' => $this->faker->word,
        'telefono' => $this->faker->word,
        'emal' => $this->faker->word,
        'estatus' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

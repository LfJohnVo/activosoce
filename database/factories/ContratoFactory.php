<?php

namespace Database\Factories;

use App\Models\Contrato;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContratoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contrato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_arrendadora' => $this->faker->randomDigitNotNull,
        'plazo' => $this->faker->word,
        'fecha_inicio' => $this->faker->date('Y-m-d H:i:s'),
        'fecha_final' => $this->faker->date('Y-m-d H:i:s'),
        'monto_inicial' => $this->faker->word,
        'monto_mensualidad' => $this->faker->word,
        'estatus' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

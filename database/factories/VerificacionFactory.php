<?php

namespace Database\Factories;

use App\Models\Verificacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class VerificacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Verificacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idDocumentosAutos' => $this->faker->randomDigitNotNull,
        'verificacion' => $this->faker->text,
        'bimestre' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

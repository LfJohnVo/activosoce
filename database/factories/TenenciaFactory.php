<?php

namespace Database\Factories;

use App\Models\Tenencia;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenenciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tenencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idTenencias' => $this->faker->randomDigitNotNull,
        'anio' => $this->faker->randomDigitNotNull,
        'idDocumentoAuto' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

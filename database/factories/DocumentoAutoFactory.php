<?php

namespace Database\Factories;

use App\Models\DocumentoAuto;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentoAutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocumentoAuto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idAuto' => $this->faker->randomDigitNotNull,
        'tarjeton' => $this->faker->text,
        'factura' => $this->faker->text,
        'responsivaEmpleado' => $this->faker->text,
        'ultimaTenencia' => $this->faker->text,
        'ultimaVerificacion' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s'),
        'deleted_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}

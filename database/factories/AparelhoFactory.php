<?php

namespace Database\Factories;

use App\Models\Aparelho;
use Illuminate\Database\Eloquent\Factories\Factory;

class AparelhoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Aparelho::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'IMEI' => $this->faker->randomNumber(),
            'marca' => $this->faker->company,
            'modelo' => $this->faker->lastName

        ];
    }
}

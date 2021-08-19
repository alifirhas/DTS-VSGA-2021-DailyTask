<?php

namespace Database\Factories;

use App\Models\Printer;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrinterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Printer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'merek' => $this->faker->name(),
            'color_id' => 5,
            'jumlah' => 40,
        ];
    }
}

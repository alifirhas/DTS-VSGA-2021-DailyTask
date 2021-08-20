<?php

namespace Database\Factories;

use App\Models\Printer;
use Illuminate\Support\Str;
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
            'merek' => Str::remove(".", $this->faker->sentence(2)),
            'color_id' => 5,
            'jumlah' => 40,
        ];
    }
}

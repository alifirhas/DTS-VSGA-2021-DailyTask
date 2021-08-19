<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::insert([
            ['warna' => 'hitam'],
            ['warna' => 'putih'],
            ['warna' => 'abu-abu'],
            ['warna' => 'Merah'],
            ['warna' => 'Kuning'],
            ['warna' => 'Hijau'],
            ['warna' => 'Biru'],
            ['warna' => 'Indigo'],
            ['warna' => 'Ungu'],
            ['warna' => 'Pink'],
        ]);
    }
}

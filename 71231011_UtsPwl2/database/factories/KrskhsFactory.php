<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use App\Models\Jadwal;
use App\Models\Krskhs;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class KrskhsFactory extends Factory
{
    protected $model = Krskhs::class;

    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'nim' => $faker->randomElement(Mahasiswa::all()->pluck('nim')->toArray()),
            'id_jadwal' => $faker->randomElement(Jadwal::all()->pluck('id_jadwal')->toArray()),
            'nilai' => $faker->randomElement(['A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'D', 'E']),
            'jenis' => $faker->randomElement(['KRS', 'KHS']),
        ];
    }
}
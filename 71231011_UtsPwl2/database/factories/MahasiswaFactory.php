<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class MahasiswaFactory extends Factory
{
    protected $model = Mahasiswa::class;

    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'nim' => $faker->unique()->numerify('71231####'),
            'nama' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'prodi' => $faker->randomElement(['Informatika', 'Sistem Informasi', 'Teknik Komputer']),
            'angkatan' => $faker->randomElement(['2021', '2022', '2023', '2024']),
        ];
    }
}
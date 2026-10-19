<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use App\Models\Registrasi;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class RegistrasiFactory extends Factory
{
    protected $model = Registrasi::class;

    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'nim' => $faker->randomElement(Mahasiswa::all()->pluck('nim')->toArray()),
            'id_jadwal' => 1, // Will be overridden in seeder
            'tanggal_registrasi' => $faker->dateTimeBetween('-30 days', 'now')->format('Y-m-d'),
            'status' => $faker->randomElement(['aktif', 'aktif', 'aktif', 'drop']), // mostly aktif
        ];
    }
}
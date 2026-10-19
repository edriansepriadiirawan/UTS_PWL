<?php

namespace Database\Factories;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class JadwalFactory extends Factory
{
    protected $model = Jadwal::class;

    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'nik' => 'DUMMY_NIK', // Will be overridden in seeder
            'kode_mk' => 1, // Will be overridden in seeder
            'hari' => $faker->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']),
            'jam_mulai' => $faker->randomElement(['07:30:00', '09:30:00', '13:00:00', '15:00:00']),
            'jam_selesai' => $faker->randomElement(['10:00:00', '12:00:00', '15:30:00', '17:30:00']),
            'ruang' => $faker->randomElement(['R101', 'R102', 'R103', 'R201', 'R202', 'R203', 'LAB1', 'LAB2', 'LAB3']),
            'kelas' => $faker->randomElement(['A', 'B', 'C', 'D', 'E']),
        ];
    }
}
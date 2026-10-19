<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class DosenFactory extends Factory
{
    protected $model = Dosen::class;

    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        return [
            'nik' => $faker->unique()->numerify('#######'),
            'nama_dosen' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'bidang_keahlian' => $faker->randomElement([
                'Pemrograman Web', 'Basis Data', 'Jaringan Komputer', 
                'Kecerdasan Buatan', 'Sistem Operasi', 'Keamanan Siber',
                'Mobile Development', 'Cloud Computing', 'Data Science', 'Software Engineering'
            ]),
        ];
    }
}
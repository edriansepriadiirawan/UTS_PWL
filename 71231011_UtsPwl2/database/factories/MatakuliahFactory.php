<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class MatakuliahFactory extends Factory
{
    protected $model = Matakuliah::class;

    public function definition(): array
    {
        $faker = FakerFactory::create('id_ID');
        $matakuliahList = [
            ['kode' => 'PWL001', 'nama' => 'Pemrograman Web Lanjut', 'sks' => 3, 'semester' => 7],
            ['kode' => 'PBO002', 'nama' => 'Pemrograman Berorientasi Objek', 'sks' => 3, 'semester' => 5],
            ['kode' => 'DBS003', 'nama' => 'Desain Basis Data', 'sks' => 3, 'semester' => 5],
            ['kode' => 'JAR004', 'nama' => 'Jaringan Komputer', 'sks' => 3, 'semester' => 5],
            ['kode' => 'AI005', 'nama' => 'Kecerdasan Buatan', 'sks' => 3, 'semester' => 7],
            ['kode' => 'SO006', 'nama' => 'Sistem Operasi', 'sks' => 3, 'semester' => 5],
            ['kode' => 'KS007', 'nama' => 'Keamanan Siber', 'sks' => 3, 'semester' => 7],
            ['kode' => 'MD008', 'nama' => 'Mobile Development', 'sks' => 3, 'semester' => 7],
            ['kode' => 'CC009', 'nama' => 'Cloud Computing', 'sks' => 3, 'semester' => 7],
            ['kode' => 'DS010', 'nama' => 'Data Science', 'sks' => 3, 'semester' => 7],
            ['kode' => 'SE011', 'nama' => 'Software Engineering', 'sks' => 3, 'semester' => 5],
            ['kode' => 'ALG012', 'nama' => 'Algoritma dan Struktur Data', 'sks' => 3, 'semester' => 3],
            ['kode' => 'WEB013', 'nama' => 'Pemrograman Web Dasar', 'sks' => 3, 'semester' => 3],
            ['kode' => 'MTK014', 'nama' => 'Matematika Diskrit', 'sks' => 3, 'semester' => 3],
            ['kode' => 'STA015', 'nama' => 'Statistika', 'sks' => 3, 'semester' => 3],
        ];
        
        $mk = $faker->randomElement($matakuliahList);
        return [
            'kode' => $mk['kode'],
            'nama_mk' => $mk['nama'],
            'sks' => $mk['sks'],
            'semester' => $mk['semester'],
        ];
    }
}
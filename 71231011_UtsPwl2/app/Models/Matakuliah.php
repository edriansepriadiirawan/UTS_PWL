<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matakuliah extends Model
{
    use HasFactory;

    protected $table = 'matakuliahs';
    protected $primaryKey = 'kode_mk';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = ['kode', 'nama_mk', 'sks', 'semester'];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class, 'kode_mk', 'kode_mk');
    }
}
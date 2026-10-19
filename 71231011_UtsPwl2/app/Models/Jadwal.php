<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal extends Model
{
    use HasFactory;

    protected $table = 'jadwals';
    protected $primaryKey = 'id_jadwal';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = ['nik', 'kode_mk', 'hari', 'jam_mulai', 'jam_selesai', 'ruang', 'kelas'];

    public function dosen()
    {
        return $this->belongsTo(Dosen::class, 'nik', 'nik');
    }

    public function matakuliah()
    {
        return $this->belongsTo(Matakuliah::class, 'kode_mk', 'kode_mk');
    }

    public function registrasis()
    {
        return $this->hasMany(Registrasi::class, 'id_jadwal', 'id_jadwal');
    }

    public function krskhs()
    {
        return $this->hasMany(Krskhs::class, 'id_jadwal', 'id_jadwal');
    }
}
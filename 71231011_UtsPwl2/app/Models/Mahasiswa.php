<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswas';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nim', 'nama', 'email', 'prodi', 'angkatan'];

    public function registrasis()
    {
        return $this->hasMany(Registrasi::class, 'nim', 'nim');
    }

    public function krskhs()
    {
        return $this->hasMany(Krskhs::class, 'nim', 'nim');
    }

    public function jadwals()
    {
        return $this->hasManyThrough(Jadwal::class, Registrasi::class, 'nim', 'id_jadwal', 'nim', 'id_jadwal');
    }
}
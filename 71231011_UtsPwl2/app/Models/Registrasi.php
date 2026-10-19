<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registrasi extends Model
{
    use HasFactory;

    protected $table = 'registrasis';
    protected $primaryKey = 'id_registrasi';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = ['nim', 'id_jadwal', 'tanggal_registrasi', 'status'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
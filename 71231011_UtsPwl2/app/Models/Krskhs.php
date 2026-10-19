<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Krskhs extends Model
{
    use HasFactory;

    protected $table = 'krskhs';
    protected $primaryKey = 'id_krs';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = ['nim', 'id_jadwal', 'nilai', 'jenis'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'id_jadwal', 'id_jadwal');
    }
}
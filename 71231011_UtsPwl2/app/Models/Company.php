<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $primaryKey = 'company_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'company_name',
        'headquarters_phone_number',
    ];

    /**
     * Relasi ke Items (One to Many: Satu company memiliki banyak items)
     */
    public function items()
    {
        return $this->hasMany(Item::class, 'company_id', 'company_id');
    }
}

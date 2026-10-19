<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';
    protected $primaryKey = 'item_code';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'item_code',
        'item',
        'unit_price',
        'company_id',
    ];

    /**
     * Relasi ke Company (Belongs To: Satu item milik satu company)
     */
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'company_id');
    }

    /**
     * Relasi ke Sales (One to Many: Satu item bisa terdapat di banyak sales)
     */
    public function sales()
    {
        return $this->hasMany(Sale::class, 'item_code', 'item_code');
    }
}

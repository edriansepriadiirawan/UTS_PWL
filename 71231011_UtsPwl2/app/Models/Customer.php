<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'first_name',
        'last_name',
        'email_address',
    ];

    /**
     * Relasi ke Sales (One to Many: Satu customer memiliki banyak sales/pembelian)
     */
    public function sales()
    {
        return $this->hasMany(Sale::class, 'customer_id', 'customer_id');
    }
}

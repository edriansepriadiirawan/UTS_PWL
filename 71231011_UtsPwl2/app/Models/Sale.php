<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $table = 'sales';
    protected $primaryKey = 'purchase_number';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'date_of_purchase',
        'customer_id',
        'item_code',
    ];

    /**
     * Relasi ke Customer (Belongs To: Satu sale dilakukan oleh satu customer)
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }

    /**
     * Relasi ke Item (Belongs To: Satu sale membeli satu item)
     */
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_code', 'item_code');
    }
}

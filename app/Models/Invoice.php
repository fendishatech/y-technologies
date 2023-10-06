<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
        'transaction_no',
        'customer_id',
        'product_id',
        'amount',
        'payment_type',
        'payment_status',
        'billed_date',
        'paid_date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    use HasFactory;
}

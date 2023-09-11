<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'order_no',
        'material',
        'size',
        'thickness',
        'quantity',
        'completed',
        'item_name',
        'item_id',
        'progress',
        'status',
        'price',
        'prepay',
        'remaining'
    ];

    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    public $table = "order_product";

    //order_tables
    protected $fillable = [
        'order_id',
        'product_id',
    ];

    public function orders() {
        return $this->belongsTo(Order::class);
    }

    public function products() {
        return $this->belongsTo(Product::class);
    }
}
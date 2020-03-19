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
        'product_quantity',
    ];
    public function getProductsData($id) {
        return Product::with('order_product')->get($id);
    }

    public function getProductImage($product_id) {
        $product = Product::find($product_id);
        return $product->image;
    }

    public function orders() {
        return $this->belongsTo(Order::class);
    }

    public function products() {
        return $this->belongsTo(Product::class);
    }
}
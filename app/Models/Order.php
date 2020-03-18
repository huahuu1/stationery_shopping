<?php

namespace App\Models;

use App\Models\Order_product;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    public $table = "orders";

    //order_tables
    protected $fillable = [
        'user_id',
        'status',
        'address',
    ];

    public function getOrderStatus($status) {
        if ($status == 0) {
            return 'Pending';
        } else if ($status == 1) {
            return 'Confirm';
        } else if ($status == 2) {
            return 'Delivered';
        } else if ($status == -1) {
            return 'Cancel';
        }
    }

    public function getUserName($id) {
        $user = User::find($id);
        if($user){
            if ($id <= 0) {
                return 'Guest';
            } else {
                return $user->name;
            }
        } else {
            return 'No User';
        }

    }

    public function getProductImage($product_id){
        $product = Order_product::find($product_id);
        return $product->image;
    }

    public function getProductQuantity($order_id) {
        $order = Order::find($order_id);
        $qty = 0;
        foreach($order->products as $item){
            $qty += $item->pivot->product_quantity;
        }
        return $qty;
    }

    public function getProductTotal($order_id) {
        $order = Order::find($order_id);
        $total = 0;
        foreach($order->products as $item){
            $total += $item->pivot->product_quantity * $item->sell_price;
        }
        return $total;
    }

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function order_product() {
        return $this->hasMany(Order_product::class);
    }
    public function products() {
        return $this->belongsToMany(Product::class,'order_product', 'order_id', 'product_id')->withPivot('product_quantity')->withTimestamps();;
    }
}

<?php

namespace App\Models;

use App\Models\Order_product;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $table = "orders";

    //order_tables
    protected $fillable = [
        'quantity',
        'user_id',
        'total',
        'status',
    ];

    public function getOrderStatus($status) {
        if ($status == 0) {
            return 'Pending';
        } else if ($status == 1) {
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

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function order_product() {
        return $this->hasMany(Order_product::class);
    }
    public function products() {
        return $this->belongsToMany(Product::class);
    }
    
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    public $table = 'products';
    //
    // category_tables
    protected $fillable = [
        'name',
        'slug',
        'image',
        'description',
        'sell_price',
        'category_id',
        'supplier_id',
        'status',
    ];
    // map Product Model to products table
    public function getCategoryName($id)
    {
        $cat = Category::find($id);
        return $cat->name;
    }

    public function getStatusName($id)
    {
        $p = Product::find($id);
        if($p->status == 1) {
            return 'In stock';
        } else {
            return 'Out of stock';
        }
    }

    public function getSupplierName($id)
    {
        $sup = Supplier::find($id);
        return $sup->name;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function order_product() {
        return $this->hasMany(Order_product::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class);
    }
}

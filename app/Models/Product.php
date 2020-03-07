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
        'sku',
        'slug',
        'image',
        'description',
        'short_description',
        'list_price',
        'sell_price',
        'supplier_id',
        'status',
        'category_id',
    ];
    // map Product Model to products table
    public function getCategoryName($id)
    {
        $cat = Category::find($id);
        return $cat->name;
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
}

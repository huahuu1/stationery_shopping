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
        'short_description',
        'description',
        'sell_price',
        'category_id',
        'sub_category_id',
        'supplier_id',
        'status',
    ];
    // map Product Model to products table

    public function getStatusName($status)
    {
        if($status == 1) {
            return 'Active';
        } else if($status == 0) {
            return 'Deactive';
        }
    }

    public function getSupplierName($id)
    {
        $sup = Supplier::find($id);
        return $sup->name;
    }

    public function getCategoryName($id)
    {
        $cate = Category::find($id);
        return $cate->name;
    }

    public function getSubCategoryName($id)
    {
        $cate = Category::find($id);
        return $cate->name;
    }

    // public function getProductByCategoryId($category_id) {
    //     $products = Product::where('category_id', $category_id)->get();
    //     return $products;
    // }

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
        return $this->belongsToMany(Order::class, 'order_product', 'product_id', 'order_id');
    }
}

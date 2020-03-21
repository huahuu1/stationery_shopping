<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    //
    // category_tables
    protected $fillable = [
        'name',
    ];

    public function getCategoriesByParentId($parent_id) {
        $categories = Category::where('parent_id',$parent_id)->get();
        return $categories;
    }

    public function getCategoriesFirst() {
        $categories = Category::where('id', '<=', 5)->get('name');
        return $categories;
    }

    public function getCategoriesLast() {
        $categories = Category::where('id', '>', 5)->get('name');
        return $categories;
    }

    public function getProductByCategoryId($category_id) {
        $products = Product::where('category_id', $category_id)->get();
        return $products;
    }



    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

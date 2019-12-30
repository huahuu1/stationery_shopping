<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    // map Product Model to products table
    public function getCategoryName($id)
    {
        $cat = Category::find($id);
        return $cat->name;
    }
}

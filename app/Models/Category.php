<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';
    //
    // category_tables
    protected $fillable = [
        'name', 'image', 'parent_id', 'description',
    ];
    public function getParentName($id)
    {
        if($id <= 0){
            return 'Danh Muc Goc';
        } else {
            $cate = self::find($id);
            return $cate->name;
        }
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

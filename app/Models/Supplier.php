<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $table = 'categories';
    //
    // supplier_tables
    protected $fillable = [
        'name',
        'slug',
        'logo',
        'address',
        'description',
        'phone',
        'status',
        'country',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

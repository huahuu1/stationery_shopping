<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public $table = 'suppliers';
    //
    // supplier_tables
    protected $fillable = [
        'name',
        'logo',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

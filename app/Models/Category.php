<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function getParentName($id)
    {
        if($id <= 0){
            return 'Danh Muc Goc';
        } else {
            $cate = self::find($id);
            return $cate->name;
        }
    }
}

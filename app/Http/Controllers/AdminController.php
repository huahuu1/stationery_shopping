<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getCategoryList($item)
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Repositories\Category\CategoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class CategoryController extends Controller
{
    public $model;
    public function __construct(CategoryInterface $categories){
        $this->model = $categories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $pageSize = $request->pageSize ?? 5;
        $path = '';
        if(!$keyword){
            $path .= "?pageSize=$pageSize";
            $categories = Category::orderBy('id', 'ASC')->paginate($pageSize);
        } else {
            $path .= "?pageSize=$pageSize&keyword=$keyword";
            $categories = Category::where('name', 'like', '%'. $keyword .'%')
                                ->orderBy('id', 'ASC')
                                ->paginate($pageSize);
        }

        $categories->withPath($path);

        return view('admin.categories.index', compact('categories', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // $category = new Category();

        // $category->name = $request->name;
        // $category->slug = Str::slug($request->name, '-').'.html';
        // $category->image = $request->image;
        // $category->parent_id = $request->parent_id;
        // $category->description = $request->description;
        // $category->save();
        $this->model->create($request->only($this->model->getModel()->fillable));

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category, $id)
    {
        //
        $category = $this->model->getById($id);
        $sub_cate = Product::where('sub_category_id', $id)->get();
        $count_sub = $sub_cate->count();

        return view('admin.categories.show', compact('category', 'sub_cate', 'count_sub'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category, $id)
    {
        $categories = $this->model->getAll();
        // dd($categories);
        $category = $this->model->getById($id);
        return view('admin.categories.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category, $id)
    {

        $this->model->update($id, $request->only($this->model->getModel()->fillable));
        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}

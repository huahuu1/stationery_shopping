<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Repositories\Supplier\SupplierInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
    public $model;
    public function __construct(SupplierInterface $suppliers){
        $this->model = $suppliers;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $suppliers = $this->model->getAll();
        $keyword = $request->keyword;
        $pageSize = $request->pageSize ?? 5;
        $path = '';
        if(!$keyword){
            $path .= "?pageSize=$pageSize";
            $suppliers = Supplier::orderBy('id', 'DESC')->paginate($pageSize);
        } else {
            $path .= "?pageSize=$pageSize&keyword=$keyword";
            $suppliers = Supplier::where('name', 'like', '%'. $keyword .'%')
                                ->orderBy('id', 'DESC')
                                ->paginate($pageSize);
        }

        $suppliers->withPath($path);

        return view('admin.suppliers.index', compact('suppliers', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->model->create($request->only($this->model->getModel()->fillable));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $supplier = $this->model->getById($id);
        return view('admin.suppliers.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier, $id)
    {
        $suppliers = $this->model->getAll();
        $supplier = $this->model->getById($id);
        return view('admin.suppliers.edit', compact('suppliers', 'supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->model->update($id, $request->only($this->model->getModel()->fillable));
        return redirect(route('suppliers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->model->delete($id);
        return redirect(route('suppliers.index'));
    }
}

<?php
namespace App\Repositories\Supplier;

use App\Models\Supplier;

class SupplierRepository implements SupplierInterface {
    public $model;
    public function __construct(Supplier $supplier){
        $this->model = $supplier;
    }
    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function with($relation)
    {
        return $this->model->with($relation);
    }

    public function update($id, array $attributes)
    {
        return $this->model->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
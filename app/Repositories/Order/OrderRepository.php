<?php
namespace App\Repositories\Order;
use App\Models\Order;

class OrderRepository implements OrderInterface {
    public $model;

    public function __construct(Order $order) {
        $this->model = $order;
    }

    public function getModel() {
        return $this->model;
    }

    public function setModel($model) {
        $this->model = $model;
        return $this;
    }

    public function with($relation) {
        return $this->model->with($relation);
    }

    public function getAll() {
        return $this->model->all();
    }

    public function getById($id) {
        return $this->model->find($id);
    }

    public function create(array $attributes) {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes) {
        return $this->model->find($id)->update($attributes);
    }

    public function delete($id)
    {
        return $this->model->find($id)->delete($id);
    }
}
?>
<?php
namespace App\Repositories\Order_product;

interface Order_ProductInterface {
    public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
}
?>
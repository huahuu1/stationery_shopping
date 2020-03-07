<?php
namespace App\Repositories\Order;

interface OrderInterface {
    public function getAll();
    public function getById($id);
    public function create(array $attributes);
    public function update($id, array $attributes);
}
?>
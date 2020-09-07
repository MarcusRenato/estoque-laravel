<?php

namespace App\Repositories\Contracts;

interface ProductRepositoryInterface
{
    public function getAll();

    public function get(int $id);

    public function store(array $data);

    public function update(int $id, array $data);

    public function destroy(int $id);

    public function paginate($number = 15);
}

<?php

namespace App\Services;

use App\Repositories\Contracts\ProductRepositoryInterface;
use Illuminate\Pagination\AbstractPaginator;

class ProductService
{
    public function __construct(
        protected ProductRepositoryInterface $productRepository
    ) {
    }

    public function getAll(): AbstractPaginator
    {
        try {
            return $this->productRepository->paginate();
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function store(array $data)
    {
        try {
            return $this->productRepository->store($data);
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function get(int $id): mixed
    {
        return $this->productRepository->get($id);
    }

    public function update(int $id, array $data): bool
    {
        try {
            return $this->productRepository->update($id, $data);
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function destroy(int $id): bool
    {
        try {
            return $this->productRepository->destroy($id);
        } catch (\Throwable $th) {
            return false;
        }
    }
}

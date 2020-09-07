<?php

namespace App\Services;

use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductService
{
    private $productRepository;

    public function __construct(ProductRepositoryInterface $productRepositoryInterface)
    {
        $this->productRepository = $productRepositoryInterface;
    }

    public function getAll()
    {
        try {
            return $this->productRepository->paginate();
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function store($data)
    {
        try {
            return $this->productRepository->store($data);
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function get($id)
    {
        return $this->productRepository->get($id);
    }

    public function update($id, $data)
    {
        try {
            return $this->productRepository->update($id, $data);
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function destroy($id)
    {
        try {
            return $this->productRepository->destroy($id);
        } catch (\Throwable $th) {
            return false;
        }
    }
}

<?php

namespace Tests\Unit;

use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Services\ProductService;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class ProductServiceTest extends TestCase
{
    protected ProductService $productService;
    protected ProductRepositoryInterface|MockObject $productRepository;
    protected array $data;

    protected function setUp(): void
    {
        $this->productRepository = $this->getMockForAbstractClass(ProductRepositoryInterface::class);

        $this->productService = new ProductService($this->productRepository);

        $this->data = [
            'name'        => 'Produto de teste',
            'description' => 'Este é um produto de teste',
            'price'       => 10,
            'quantity'    => 1
        ];
    }

    public function testIfInsertingProductWorks(): void
    {
        $this->productRepository
            ->expects(self::once())
            ->method('store');

        $this->productService->store($this->data);
    }
}

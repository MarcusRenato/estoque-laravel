<?php

namespace App\Repositories\Eloquent;

use App\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductRepository extends AbstractRepository implements ProductRepositoryInterface
{
    protected $model = Product::class;
}

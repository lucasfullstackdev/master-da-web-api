<?php

namespace App\Services;

use App\Models\Product;

class ProductService extends Service implements IService
{
    protected string $model = Product::class;
}

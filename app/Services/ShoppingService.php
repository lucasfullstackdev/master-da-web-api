<?php

namespace App\Services;

use App\Models\Shopping;

class ShoppingService extends Service implements IService
{
    protected string $model = Shopping::class;
}

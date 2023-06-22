<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\{Store, Update};
use App\Services\ProductService;

class ProductController extends Controller
{
    use Crud;

    public function __construct()
    {
        $this->service = new ProductService();
    }

    public function store(Store $request)
    {
        return $this->_store($request);
    }

    public function update(Update $request, int $id)
    {
        return $this->_update($request, $id);
    }
}

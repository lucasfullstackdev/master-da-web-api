<?php

namespace App\Http\Controllers;

use App\Http\Requests\Shopping\{Store, Update};
use App\Services\ShoppingService;

class ShoppingController extends Controller
{
    use Crud;

    public function __construct()
    {
        $this->service = new ShoppingService();
    }

    public function store(Store $request)
    {
        return $this->_store($request);
    }

    public function update(Update $request, int $id)
    {
        return $this->_update($request, $id);
    }

    public function client(int $id)
    {
        return response()->json(
            $this->service->with(['client'])->find($id)->show()
        );
    }
}

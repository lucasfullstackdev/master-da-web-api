<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\{Store, Update};
use App\Services\ClientService;

class ClientController extends Controller
{
    use Crud;

    public function __construct()
    {
        $this->service = new ClientService();
    }

    public function store(Store $request)
    {
        return $this->_store($request);
    }

    public function update(Update $request, int $id)
    {
        return $this->_update($request, $id);
    }

    public function shopping(int $id)
    {
        return response()->json(
            $this->service->with(['shopping'])->find($id)->show()
        );
    }
}

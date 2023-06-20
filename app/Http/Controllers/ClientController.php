<?php

namespace App\Http\Controllers;

use App\Http\Requests\Client\Store;
use App\Http\Requests\Client\Update;
use App\Services\ClientService;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct(public readonly ClientService $service)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            $this->service->paginate()
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Store $request)
    {
        return response()->json(
            $this->service->store($request)
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(
            $this->service->find($id)->show()
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update $request, string $id)
    {
        return response()->json(
            $this->service->find($id)->update($request)
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json(
            $this->service->find($id)->delete()
        );
    }

    public function shopping(int $id)
    {
        return response()->json(
            $this->service->with(['shopping'])->find($id)->show()
        );
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product\Store;
use App\Http\Requests\Product\Update;
use App\Services\IService;
use App\Services\ProductService;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(public readonly ProductService $service)
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
}

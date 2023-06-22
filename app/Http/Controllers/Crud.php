<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Services\IService;

trait Crud
{
    protected IService $service;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(
            $this->service->paginate()
        );
    }

    public function _store(Request $request)
    {
        return response()->json(
            $this->service->store($request)
        );
    }

    public function _update(Request $request, int $id)
    {
        return response()->json(
            $this->service->find($id)->update($request)
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
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json(
            $this->service->find($id)->delete()
        );
    }

}
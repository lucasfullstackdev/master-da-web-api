<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('client - index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('client - store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd('client - show');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('client - update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd('client - destroy');
    }

    public function shopping(int $id)
    {
        dd('client - shopping');
    }
}

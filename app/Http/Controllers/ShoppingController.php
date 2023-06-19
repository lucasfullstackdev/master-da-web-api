<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('shopping - index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('shopping - store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        dd('shopping - show');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        dd('shopping - update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd('shopping - destroy');
    }

    public function client(int $id)
    {
        dd('shopping - client');
    }
}

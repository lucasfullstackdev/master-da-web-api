<?php

namespace App\Services;

use App\Http\Requests\Request;

interface IService
{
    public function paginate();
    public function with(array $with);
    public function find(int $id);
    public function show();
    public function store(Request $request);
    public function update(Request $request);
    public function delete();
}

<?php

namespace App\Services;

use App\Http\Requests\Request;
use Exception;
use Illuminate\Http\Response;

class Service
{

    protected string $model;
    protected array $with = [];
    protected $result;

    public function paginate()
    {
        return $this->model::paginate();
    }

    public function with(array $with)
    {
        $this->with = $with;
        return $this;
    }

    public function find(int $id)
    {
        $this->result = $this->model::with($this->with)->find($id);

        if (empty($this->result)) {
            throw new Exception("Registro não encontrado", Response::HTTP_NOT_FOUND);
        }

        return $this;
    }

    public function show()
    {
        return $this->result;
    }

    public function store(Request $request)
    {
        try {
            $created = $this->model::create($request->all());
            return $created->toArray();
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function update(Request $request)
    {
        try {
            $this->result->update($request->all());
            return $request->all();
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }

    public function delete()
    {
        $this->result->delete();

        return $this->result;
    }
}

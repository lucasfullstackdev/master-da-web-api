<?php

namespace App\Services;

use App\Models\User;

class ClientService extends Service
{
    protected string $model = User::class;

    public function with(array $with)
    {
        $this->with = $with;
        return $this;
    }
}

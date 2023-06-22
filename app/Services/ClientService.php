<?php

namespace App\Services;

use App\Models\User;

class ClientService extends Service implements IService
{
    protected string $model = User::class;
}

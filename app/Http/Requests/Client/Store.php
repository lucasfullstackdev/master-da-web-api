<?php

namespace App\Http\Requests\Client;

use App\Http\Requests\Request;

class Store extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:5',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required'
        ];
    }
}

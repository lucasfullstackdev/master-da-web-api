<?php

namespace App\Http\Requests\Shopping;

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
            'products' => 'required',
            'user_id' => 'required|exists:users,id'
        ];
    }
}

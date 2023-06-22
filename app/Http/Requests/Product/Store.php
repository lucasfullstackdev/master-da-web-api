<?php

namespace App\Http\Requests\Product;

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
            'price' => 'required|decimal:2',
            'available' => 'boolean'
        ];
    }
}

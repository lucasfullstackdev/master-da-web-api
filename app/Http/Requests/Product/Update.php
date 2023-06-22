<?php

namespace App\Http\Requests\Product;

use App\Http\Requests\Request;

class Update extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|min:5',
            'price' => 'decimal:2',
            'available' => 'boolean'
        ];
    }
}

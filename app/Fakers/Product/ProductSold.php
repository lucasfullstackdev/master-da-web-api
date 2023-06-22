<?php

namespace App\Fakers\Product;

use App\Fakers\CustomFaker;
use Faker\Generator;

class ProductSold extends CustomFaker
{

    public function __construct(private readonly Generator $faker)
    {
    }

    public function productsSold(int $limit = 1): array
    {
        $products = array_map(function () {
            return [
                'name' => $this->faker->product(),
                'price' => static::randomFloat(2, 1, 999),
            ];
        }, range(1, static::numberBetween(1, $limit)));

        return $products;
    }
}

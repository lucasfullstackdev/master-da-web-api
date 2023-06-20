<?php

namespace App\Fakers\Product;

use App\Fakers\CustomFaker;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Product extends CustomFaker
{
    private string $basePathToProductsList = '/data/products.txt';

    public function product(int $limit = 1): string
    {
        $products = $this->loadProductsList();
        return $products[static::numberBetween(0, count($products) - 1)];
    }

    /**
     * Faz carga do arquivo products.txt
     * com uma lista nomes de produtos que será utilizado para criar 
     * os nomes dos produtos
     */
    private function loadProductsList(): array
    {
        if (!Storage::exists($this->basePathToProductsList)) {
            return [];
        }

        return Cache::rememberForever('products_from_file_txt', function () {
            return array_map('trim', explode("\n", Storage::get($this->basePathToProductsList)));
        });
    }
}

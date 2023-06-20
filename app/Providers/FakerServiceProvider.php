<?php

namespace App\Providers;

use App\Fakers\Product\Product;
use App\Fakers\Product\ProductSold;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->afterResolving(function (mixed $instance) {
            if ($instance instanceof Generator) {
                $instance->addProvider(new Product($instance));
                $instance->addProvider(new ProductSold($instance));
            }
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
    }
}

<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Cache;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shopping>
 */
class ShoppingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'products' => fake()->productsSold(4),
            'total' => fake()->randomFloat(2, 1, 999),
            'user_id' => fake()->numberBetween(1, $this->countUsers() - 1)
        ];
    }

    private function countUsers(): int
    {
        return Cache::rememberForever('users_count_to_factory', function () {
            return User::count();
        });
    }
}

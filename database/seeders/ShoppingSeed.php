<?php

namespace Database\Seeders;

use App\Models\Shopping;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShoppingSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shopping::factory()->count(200)->create();
    }
}

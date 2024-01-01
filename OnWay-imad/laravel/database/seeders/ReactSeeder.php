<?php

namespace Database\Seeders;

use App\Models\React;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        React::factory()->count(12)->create();

    }
}

<?php

namespace Database\Seeders;

use App\Models\Postulate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostulateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Postulate::factory()->count(10)->create();

    }
}

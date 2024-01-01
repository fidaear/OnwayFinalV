<?php

namespace Database\Seeders;

use App\Models\Recruiter;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RecruiterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Recruiter::factory()->count(5)->create();
    }
}

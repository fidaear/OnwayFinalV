<?php

namespace Database\Seeders;

use App\Models\JobSeeker;

use Illuminate\Database\Seeder;

class JobSeekerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JobSeeker::factory()->count(5)->create();

    }
}

<?php

namespace Database\Factories;

use App\Models\JobSeeker;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobSeeker>
 */
class JobSeekerFactory extends Factory
{
    protected $model = JobSeeker::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('en_US');
        $user = User::select('id')->where('role','jobSeeker')->inRandomOrder()->limit(1)->get();
        $user_id = $user[0]->id;
        return [
            'seeker_id' => $faker->uuid(),
            'title' => $faker->name(),
            'dateBirthday' => $faker->date(),
            'EducationLevel' => $faker->numberBetween(1, 5),
            'educationDescription' => $faker->paragraph(),
            'experience' => $faker->numberBetween(1, 10),
            'experienceDescription' => $faker->paragraph(),
            'skills' => $faker->words(4),
            'languages' => $faker->words(4),
            'cv' => $faker->imageUrl,
          //  'languages' =>  $faker->randomElement(['Arabic', 'French','English','Spanish']),
            'linkedinLink' => $faker->url(),
            'user_id' => $user_id,
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Recruiter;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Recruiter>
 */
class RecruiterFactory extends Factory
{

    protected $model = Recruiter::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('en_US');
        $user = User::select('id')->inRandomOrder()->limit(1)->get(); // ["id" : "sososo"]
        $user_id = $user[0]->id;
        return [
            'recruiter_id' => $faker->uuid(),
            'industry' => $faker->word(),
            'companySize' => $faker->numberBetween(1, 50),
            'companyWebsite' => $faker->url(),
            'companyAbout' => $faker->text(),
            'companyOverview' => $faker->imageUrl(),
            'user_id' => $user_id,
        ];
    }
}

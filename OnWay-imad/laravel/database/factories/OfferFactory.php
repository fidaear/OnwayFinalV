<?php

namespace Database\Factories;

use App\Models\JobSeeker;
use App\Models\User;
use App\Models\Offer;
use App\Models\Recruiter;
use Faker\Provider\en_US\Address;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Offer>
 */
class OfferFactory extends Factory
{

    protected $model = Offer::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('en_US');
        $recruiter = Recruiter::select('recruiter_id')->inRandomOrder()->limit(1)->get();
        $recruiter_id = $recruiter[0]->recruiter_id;

        return [
            'offer_id' => $faker->uuid(),
            'title' => $faker->name(),
            'description' => $faker->text(),
            'location' => Address::state(),
            'experienceYear'=> $faker->numberBetween(1,10),
            'EducationLevel' => $faker->numberBetween(1, 10),
            'competences' =>  json_encode($faker->words(4)),
            'languages' =>  json_encode($faker->words(4)),
            'typeContract' => $faker->randomElement(['cdd', 'cdi','ctt']),
            'salary' => $faker->numberBetween(1500,50000),
            'recruiter_id' => $recruiter_id
        ];
    }
}

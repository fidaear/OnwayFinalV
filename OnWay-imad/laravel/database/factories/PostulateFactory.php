<?php

namespace Database\Factories;

use App\Models\JobSeeker;
use App\Models\User;
use App\Models\Offer;
use App\Models\Postulate;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Postulate>
 */
class PostulateFactory extends Factory
{

    protected $model = Postulate::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('en_US');
        $offer = Offer::select('offer_id')->inRandomOrder()->limit(1)->get();
        $seeker = JobSeeker::select('seeker_id')->inRandomOrder()->limit(1)->get();
        $seeker_id = $seeker[0]->seeker_id;
        $offer_id = $offer[0]->offer_id;

        return [
            'statusPostulate' => $faker->randomElement([true,false]),
            'offer_id' => $offer_id,
            'seeker_id' => $seeker_id,
        ];
    }
}

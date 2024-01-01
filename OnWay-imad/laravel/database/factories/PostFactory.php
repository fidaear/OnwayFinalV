<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('en_US');
        $user = User::select('id')->inRandomOrder()->limit(1)->get();
        $user_id = $user[0]->id;

        return [
            'post_id' => $faker->uuid(),
            'title' => $faker->name(),
            'description' => $faker->paragraph(),
            'user_id' => $user_id
        ];
    }
}

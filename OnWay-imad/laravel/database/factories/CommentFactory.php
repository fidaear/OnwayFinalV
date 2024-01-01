<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{

    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('en_US');
        $post = Post::select('post_id')->inRandomOrder()->limit(1)->get();
        $user = User::select('id')->inRandomOrder()->limit(1)->get();
        $user_id = $user[0]->id;
        $post_id = $post[0]->post_id;



        return [
            'comment_id' => $faker->uuid(),
            'content' => $faker->paragraph(),
            'post_id' => $post_id,
            'user_id' => $user_id
        ];
    }
}

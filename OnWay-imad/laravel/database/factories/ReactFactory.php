<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\React;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\React>
 */
class ReactFactory extends Factory
{

    protected $model = React::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $post = Post::select('post_id')->inRandomOrder()->limit(1)->get();
        $user = User::select('id')->inRandomOrder()->limit(1)->get();
        $post_id = $post[0]->post_id;
        $user_id = $user[0]->id;


        return [
            'post_id' => $post_id,
            'user_id' => $user_id
        ];
    }
}

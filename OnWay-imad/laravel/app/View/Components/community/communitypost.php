<?php

namespace App\View\Components\community;

use App\Models\Post;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class communitypost extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $posts = Post::all();
        // dd($posts[0]);
        return view('components.community.communitypost',[
            'posts' => Post::all()
        ]);
    }
}

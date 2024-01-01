<?php

namespace App\View\Components\community;

use App\Models\Recruiter;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class mycontact extends Component
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
        return view('components.community.mycontact',[
            "recruiters" => Recruiter::take(5)->get()
        ]);
    }
}

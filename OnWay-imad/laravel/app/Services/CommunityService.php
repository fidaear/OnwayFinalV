<?php
// app/Services/UserService.php

namespace App\Services;

use App\Events\CommunityPost;
use Pusher\Pusher;
use App\Models\Chat;
use App\Models\User;
use App\Events\SendMessage;
use Illuminate\Support\Facades\Auth;


class CommunityService
{
    protected $pusher;
    public function __construct() {
        $this->pusher = new Pusher('fb30634078f0a2d84d5e','09ceb88cabbff95ab293','1713314');

    }
    public function getUserInfo($id)
    {
        return User::where('id',$id)->first();
    }

    public function SharePost($message)
    {
        broadcast(new CommunityPost($message))->toOthers();

    }
}
?>

<?php

namespace App\Http\Controllers;

use Pusher\Pusher;
use App\Models\Chat;
use App\Models\User;
use App\Events\SendMessage;
use Illuminate\Http\Request;
use App\Services\CommunityService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class CommunityController extends Controller
{
    public function ChatForm() {
        return view('community');
    }
    public function SharePost(Request $request,CommunityService $communityService) {
        $communityService->SharePost($request->input('message'));
        return view('community');
    }
}

<?php

namespace App\Http\Controllers;

use Pusher\Pusher;
use App\Models\User;
use App\Models\Chat;
use Illuminate\Http\Request;
use App\Services\ChatService;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{


    public function Chat($id) {
        $receiver = User::find($id);
        $senderId=Auth::id();
        $sender = User::find($senderId);

        $messages = Chat::where(function ($query) use ($id, $senderId) {
            $query->where('receiver', $id)
                ->where('sender', $senderId);
        })->orWhere(function ($query) use ($id, $senderId) {
            $query->where('receiver', $senderId)
                ->where('sender', $id);
        })->orderBy('created_at', 'asc')->get();

        return view('chat',compact('receiver','sender','messages'));
    }

    public function SendMessage($id,ChatService $chatService,Request $request) {
        $message = $request->input('message');
        $receiver = $id;
        $sender = Auth::id();
        $chatService->SendMessage($message,$sender,$receiver);
    }

    public function auth() {

        $pusher = new Pusher(env('PUSHER_APP_KEY'), env('PUSHER_APP_SECRET'), env('PUSHER_APP_ID'));
        $auth = $pusher->authorizeChannel($_POST['channel_name'], $_POST['socket_id']);
        echo $auth;
    }
}

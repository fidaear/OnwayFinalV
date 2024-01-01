<?php
// app/Services/UserService.php

namespace App\Services;

use App\Events\ChatMessage;
use App\Events\CommunityPost;
use Pusher\Pusher;
use App\Models\Chat;
use App\Models\User;
use App\Events\SendMessage;
use Illuminate\Support\Facades\Auth;


class ChatService
{

    public function chat($id) {
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
        
    }
    public function SendMessage($message,$sender,$receiver)
    {
        Chat::create([
            'sender' => $sender,
            'receiver' => $receiver,
            'message' => $message
        ]);
        broadcast(new ChatMessage($message,$receiver,$sender))->toOthers();

    }
}
?>

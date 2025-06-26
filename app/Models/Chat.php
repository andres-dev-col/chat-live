<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'username',
        'message',
        'user_id'
    ];

    public static function saveChat($data){
        $chat = Chat::create([
            'username' => $data['username'],
            'message' => $data['message'],
            'user_id' => $data['user_id'],
        ]);
        return $chat;
    }

    public static function getChats(){
        $chats = Chat::orderBy('created_at', 'desc')->take(5)->get()->toArray();
        return $chats;
    }
}

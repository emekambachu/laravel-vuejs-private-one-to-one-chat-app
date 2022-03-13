<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatSession extends Model
{
    public function chatConversations(){
        return $this->hasManyThrough(ChatConversation::class, ChatMessage::class);
    }

    public function chatMessages(){
        return $this->hasMany(ChatMessage::class);
    }
}

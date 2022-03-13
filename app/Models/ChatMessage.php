<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    public function chatConversations(){
        return $this->hasMany(ChatConversation::class);
    }
}

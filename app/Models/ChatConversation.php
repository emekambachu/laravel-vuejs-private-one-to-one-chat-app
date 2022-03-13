<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatConversation extends Model
{
    public function chatMessages(){
        return $this->belongsTo(ChatMessage::class);
    }
}

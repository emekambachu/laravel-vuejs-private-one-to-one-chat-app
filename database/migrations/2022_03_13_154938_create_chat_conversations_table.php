<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatConversationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_conversations', static function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('chat_message_id');
            $table->unsignedInteger('chat_session_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->boolean('type'); // 0 is for send, 1 is for receive
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chat_conversations');
    }
}

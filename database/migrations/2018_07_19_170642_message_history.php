<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MessageHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_history', function(Blueprint $t)
        {
           $t->increments('id');
           $t->integer('user_id');
           $t->string('subject');
           $t->longText('body');
           $t->integer('sender_id');
           $t->integer('status')->default(0); //0-> unread, 1->read
           $t->timestamps();

           $t->foreign('user_id')->references('id')->on('users');
            $t->index('sender_id');
            $t->index('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('message_history');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function(Blueprint $t)
        {
           $t->increments('id');
           $t->string('title_event');
           $t->string('title_body');
           $t->longText('body');
           $t->string('location');
           $t->string('google_maps_link');
           $t->integer('user_id');
           $t->string('external_event_link');
           $t->timestamp('event_time');
           $t->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('events');
    }
}

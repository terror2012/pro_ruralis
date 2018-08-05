<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sponsorships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsorships', function(Blueprint $t)
        {
           $t->increments('id');
           $t->integer('sponsor_id');
           $t->longText('description');
           $t->string('item_to_sponsor');
           $t->string('quantity');
           $t->integer('status'); //0->active, 1-> accepted, 2-> In Queue, 3-> declined
            $t->timestamps();

            $t->foreign('sponsor_id')->references('id')->on('sponsors');
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
        Schema::drop('sponsorships');
    }
}

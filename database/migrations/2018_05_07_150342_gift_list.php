<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GiftList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gift_list', function(Blueprint $t)
        {
            $t->increments('id');
            $t->string('name');
            $t->integer('sponsor_id');
            $t->string('description');
            $t->integer('quantity');
            $t->integer('status')->default(0); //0->Awaiting, 1->Delivering, 2->Completed
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
        Schema::drop('gift_list');
    }
}

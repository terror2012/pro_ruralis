<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $t)
        {
            $t->string('address')->nullable();
            $t->string('liceu')->nullable();
            $t->string('city')->nullable();
            $t->string('age')->nullable();
            $t->integer('account_type')->default(1); //1 for users, 2 for sponsors, 3 for admins
            $t->string('phone')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

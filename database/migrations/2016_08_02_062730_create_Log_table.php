<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Log', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('IP');
            $table->text('Login');
            $table->text('Logout');
            $table->text('Account');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Log');
    }
}

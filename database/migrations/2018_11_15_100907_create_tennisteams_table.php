<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTennisteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tennisteams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teamname' , 50);
            $table->integer('playeramount');
            $table->string('teamlocation', 50);
            $table->string('teamcoach', 50);
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
        Schema::dropIfExists('tennisteams');
    }
}

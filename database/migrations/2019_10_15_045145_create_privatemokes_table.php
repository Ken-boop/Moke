<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrivatemokesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('privatemokes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('organizer_id')->unsigned();
            $table->foreign('organizer_id')->references('id')->on('users');
            $table->integer('viewer_id')->unsigned();
            $table->foreign('viewer_id')->references('id')->on('users');
            $table->integer('moke_id')->unsigned();
            $table->foreign('moke_id')->references('id')->on('mokes')->onDelete('cascade');
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
        Schema::dropIfExists('mokes');
    }
}

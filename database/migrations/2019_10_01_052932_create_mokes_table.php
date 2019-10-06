<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMokesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mokes', function (Blueprint $table) {
            $table->increments('moke_id'); 
            $table->integer('organizer_id')->unsigned();
            $table->foreign('organizer_id')->references('id')->on('users');
            $table->string('moke_name', 30); //追加
            $table->datetime('due_date');
            $table->datetime('end_date');
            $table->text('moke_detail'); //追加
            $table->text('address'); //追加
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

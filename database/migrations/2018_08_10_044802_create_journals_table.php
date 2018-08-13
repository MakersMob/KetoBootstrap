<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->increments('id');
            $table->text('emotions')->nullable();
            $table->text('wins')->nullable();
            $table->text('hiccups')->nullable();
            $table->text('food')->nullable();
            $table->decimal('weight', 5, 1)->nullable();
            $table->decimal('sleep', 5, 1)->nullable();
            $table->decimal('waist', 5, 1)->nullable();
            $table->decimal('hips', 5, 1)->nullable();
            $table->decimal('thighs', 5, 1)->nullable();
            $table->decimal('butt', 5, 1)->nullable();
            $table->decimal('chest', 5, 1)->nullable();
            $table->decimal('arms', 5, 1)->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('challenge_id')->unsigned();
            $table->foreign('challenge_id')->references('id')->on('challenges');
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
        Schema::dropIfExists('journals');
    }
}

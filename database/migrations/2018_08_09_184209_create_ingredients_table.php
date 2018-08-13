<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('slug')->nullable();
            $table->string('link')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('ingredient_recipe', function (Blueprint $table) {
            $table->integer('ingredient_id')->unsigned();
            $table->foreign('ingredient_id')->references('id')->on('ingredients');
            $table->integer('recipe_id')->unsigned();
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->string('amount')->nullable();
            $table->string('measurement')->nullable();
            $table->string('item')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_recipe');
        Schema::dropIfExists('ingredients');
    }
}

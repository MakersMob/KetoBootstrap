<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_plans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('meal_plan_recipe', function (Blueprint $table) {
            $table->integer('meal_plan_id')->unsigned();
            $table->foreign('meal_plan_id')->references('id')->on('meal_plans');
            $table->integer('recipe_id')->unsigned();
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->tinyInteger('week')->default('1');
            $table->tinyInteger('day')->default('1');
            $table->string('meal')->default('breakfast');
            $table->tinyInteger('servings')->default('1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_plan_recipe');
        Schema::dropIfExists('meal_plans');
    }
}

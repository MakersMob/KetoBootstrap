<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->integer('servings')->default('1');
            $table->text('serving_description')->nullable();
            $table->decimal('calories', 5, 1)->default('0.0');
            $table->decimal('protein', 5, 1)->default('0.0');
            $table->decimal('fat', 5, 1)->default('0.0');
            $table->decimal('carbs', 5, 1)->default('0.0');
            $table->text('pinterest')->nullable();
            $table->string('source')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

        Schema::create('recipe_user', function (Blueprint $table) {
            $table->integer('recipe_id')->unsigned();
            $table->foreign('recipe_id')->references('id')->on('recipes');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('category')->default('general');
            $table->string('slug')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_user');
        Schema::dropIfExists('recipes');
    }
}

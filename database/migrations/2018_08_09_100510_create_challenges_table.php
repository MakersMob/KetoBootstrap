 <?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChallengesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('challenges', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->nullable();
            $table->string('name');
            $table->integer('days')->default(7);
            $table->string('video')->nullable();
            $table->text('description');
            $table->text('start_email_form')->nullable();
            $table->text('restart_email_form')->nullable();
            $table->text('stop_email_form')->nullable();
            $table->timestamps();
        });

        Schema::create('challenge_user', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('challenge_id')->unsigned();
            $table->foreign('challenge_id')->references('id')->on('challenges');
            $table->boolean('complete')->default(0);
            $table->timestamp('completed_on')->nullable();
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
        Schema::dropIfExists('challenge_user');
        Schema::dropIfExists('challenges');
    }
}

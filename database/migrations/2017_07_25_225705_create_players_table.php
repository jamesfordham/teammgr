<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grades_id')->unsigned(); //means cant be negative
            $table->string('fname',50)->nullable();
            $table->string('lname',50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('phone',12)->nullable();
            $table->string('position',12)->nullable();
            $table->string('nswrego',12)->nullable();
            $table->integer('briarsreg')->unsigned()->nullable();
            $table->date('year')->nullable();
            $table->integer('avaliable')->unsigned()->nullable();
            $table->text('playernotes')->nullable();
            $table->timestamps();
        });

        //Create the Foreign Key (link to PL table - Grades ID column)
        Schema::table('players', function(Blueprint $table) {
            $table->foreign('grades_id')->references('id')->on('grades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
        Schema::table('players', function(Blueprint $table){
            $table->dropForeign('players_grades_id_foreign');
        });
    }
}

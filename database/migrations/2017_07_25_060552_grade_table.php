<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('coach_id')->unsigned()->nullable();  //Coach assigned
            $table->string('sydgrade'); //PL, SL, ML etc
            $table->string('clubgrade'); //1st Grade to 8th Grade
            $table->integer('mfjm_id')->unsigned()->nullable();  //Male, Female, Junior or Masters
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
        Schema::dropIfExists('grades');
    }
}

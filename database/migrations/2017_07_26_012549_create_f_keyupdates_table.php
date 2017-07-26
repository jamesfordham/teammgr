<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFKeyupdatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('coaches', function (Blueprint $table) {
            //$table->integer('grade_id')->unsigned()->change();  //If you need to change an Iteger col to unsigned
            $table->foreign('grade_id')->references('id')->on('grades');
        });

        Schema::table('grades', function (Blueprint $table) {
            $table->foreign('mfjm_id')->references('id')->on('mfjm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('f_keyupdates');
    }
}

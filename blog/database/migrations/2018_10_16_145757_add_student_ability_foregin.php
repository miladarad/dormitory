<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudentAbilityForegin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_ability', function (Blueprint $table) {
            $table->foreign('student_id')->references('id')->on('student');
            $table->foreign('ability_id')->references('id')->on('ability');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student_ability', function (Blueprint $table) {
            //
        });
    }
}

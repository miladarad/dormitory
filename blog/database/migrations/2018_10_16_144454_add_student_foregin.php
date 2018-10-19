<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudentForegin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student', function (Blueprint $table) {
            $table->foreign('degree_id')->references('id')->on('degree');
            $table->foreign('major_id')->references('id')->on('major');
            $table->foreign('university_id')->references('id')->on('university');
            $table->foreign('dormitory_id')->references('id')->on('dormitory');
            $table->foreign('room_id')->references('id')->on('room');
            $table->foreign('city_id')->references('id')->on('city');
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('student', function (Blueprint $table) {
            //
        });
    }
}

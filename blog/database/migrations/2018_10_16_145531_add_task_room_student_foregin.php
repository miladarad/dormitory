<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTaskRoomStudentForegin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_room_student', function (Blueprint $table) {
            $table->foreign('task_id')->references('id')->on('task');
            $table->foreign('task_room_id')->references('id')->on('task_room');
            $table->foreign('student_id')->references('id')->on('student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_room_student', function (Blueprint $table) {
            //
        });
    }
}

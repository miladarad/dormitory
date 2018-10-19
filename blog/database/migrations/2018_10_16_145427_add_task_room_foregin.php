<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTaskRoomForegin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_room', function (Blueprint $table) {
            $table->foreign('task_id')->references('id')->on('task');
            $table->foreign('room_id')->references('id')->on('room');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_room', function (Blueprint $table) {
            //
        });
    }
}

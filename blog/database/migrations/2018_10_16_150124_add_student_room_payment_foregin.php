<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudentRoomPaymentForegin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('student_room_payment', function (Blueprint $table) {
            $table->foreign('room_payment_id')->references('id')->on('room_payment');
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
        Schema::table('student_room_payment', function (Blueprint $table) {
            //
        });
    }
}

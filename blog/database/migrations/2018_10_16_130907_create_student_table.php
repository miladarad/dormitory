<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('degree_id');
            $table->unsignedInteger('major_id');
            $table->unsignedInteger('university_id');
            $table->unsignedInteger('dormitory_id');
            $table->unsignedInteger('room_id');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('users_id');
            $table->string('name',100);
            $table->string('family',200);
            $table->timestamp('birth_date');
            $table->string('national_code',10);
            $table->string('student_code',20);
            $table->string('photo');
            $table->string('desk',500);
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
        Schema::dropIfExists('student');
    }
}

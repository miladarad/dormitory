<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTaskAbilityForegin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('task_ability', function (Blueprint $table) {
            $table->foreign('task_id')->references('id')->on('task');
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
        Schema::table('task_ability', function (Blueprint $table) {
            //
        });
    }
}

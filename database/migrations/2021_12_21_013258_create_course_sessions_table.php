<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_sessions', function (Blueprint $table) {
            $table->char('courseSessionID', 36)->primary();
            $table->string('idCourse');
            $table->string('idRoom');
            $table->string('courseSchedule');
            $table->string('courseScheduleStart');
            $table->string('courseScheduleEnd');
            $table->string('courseCapacity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_sessions');
    }
}

<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->char('courseID', 36)->primary();
            $table->string('courseCode');
            $table->string('courseTitle');
            $table->string('courseScope');
            $table->string('courseType');
            $table->string('courseCredits');
            $table->string("semester");
            $table->string('semesterType');
            $table->string('idDepartment');
            $table->string('idCourseGradeComponents')->nullable();
            $table->string('idAcademicYear');
            $table->timestamp('createdAt', 0)->nullable()->useCurrent();
            $table->timestamp('updatedAt', 0)->nullable()->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

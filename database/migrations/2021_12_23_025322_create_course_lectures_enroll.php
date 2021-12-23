<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseLecturesEnroll extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_lectures_enroll', function (Blueprint $table) {
            $table->id();
            $table->char('idLecture', 36);
            $table->char('idCourse', 36);
            $table->char('idSession', 36);
            $table->boolean('isPrimaryLecture');
            $table->longText('lectureDescriptions')->nullable();
            $table->timestamp('createdAt', 0)->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updatedAt', 0)->nullable()->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_lectures_enroll');
    }
}

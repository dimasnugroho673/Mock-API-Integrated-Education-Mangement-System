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
            $table->uuid('courseID')->primary();
            $table->string('courseCode');
            $table->string('courseTitle');
            $table->string('courseType');
            $table->string('courseCredits');
            $table->string('idDepartment');
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
        Schema::dropIfExists('courses');
    }
}

<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_modules', function (Blueprint $table) {
            $table->uuid('moduleID')->primary()->unique();
            $table->char('idCourse', 36);
            $table->char('idSession', 36);
            $table->string('moduleTitle');
            $table->string('moduleType');
            $table->boolean('isActive');
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
        Schema::dropIfExists('modules');
    }
}

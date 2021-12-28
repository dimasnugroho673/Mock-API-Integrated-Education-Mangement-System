<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_quizzes', function (Blueprint $table) {
            $table->id();
            $table->char('idModule', 36);
            $table->dateTime('assignedDate');
            $table->dateTime('deadlineDate');
            $table->string('durationLimit');
            $table->json('data');
            $table->longText('addionalInfo')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_quizzes');
    }
}

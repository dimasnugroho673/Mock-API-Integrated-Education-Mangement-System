<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_assignments', function (Blueprint $table) {
            $table->id();
            $table->char('idModule', 36);
            $table->dateTime('assignedDate');
            $table->dateTime('deadlineDate');
            $table->longText('descriptions');
            $table->json('extensions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_assignment');
    }
}

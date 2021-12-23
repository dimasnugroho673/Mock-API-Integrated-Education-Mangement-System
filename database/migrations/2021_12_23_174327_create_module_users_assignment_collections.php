<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleUsersAssignmentCollections extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_users_assignment_collections', function (Blueprint $table) {
            $table->id();
            $table->char('idUser', 36);
            $table->char('idCourse', 36);
            $table->char('idSession', 36);
            $table->char('idModule', 36);
            $table->string('path');
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
        Schema::dropIfExists('module_users_assignment_collections');
    }
}

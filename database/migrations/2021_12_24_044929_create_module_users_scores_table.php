<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleUsersScoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_users_scores', function (Blueprint $table) {
            $table->id();
            $table->char('idUser', 36);
            $table->char('idCourse', 36);
            $table->char('idSession', 36);
            $table->char('idModule', 36);
            $table->float('moduleScore', 8, 2);
            $table->string('moduleGrade', 2);
            $table->json('additionalInfo')->nullable();
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
        Schema::dropIfExists('module_users_scores');
    }
}

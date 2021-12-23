<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibBookLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_book_loans', function (Blueprint $table) {
            $table->id();
            $table->string('idUser');
            $table->string('idLibBook');
            $table->dateTime('date');
            $table->dateTime('deadline');
            $table->boolean('isFinished')->default(false);
            $table->dateTime('returningDate')->nullable();
            $table->longText('descriptions')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loanings');
    }
}

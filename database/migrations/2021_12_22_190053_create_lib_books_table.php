<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lib_books', function (Blueprint $table) {
            $table->id();
            $table->string('bookCode');
            $table->string('bookTitle');
            $table->string('bookPublisher');
            $table->string('publicationYear');
            $table->string('stocks');
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
        Schema::dropIfExists('lib_books');
    }
}

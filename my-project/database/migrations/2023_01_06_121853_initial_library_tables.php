<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->timestamp('publication_date');
            $table->integer('number_of_pages');
            $table->float('dewey_reference');
            $table->string('cover_image');
        });

        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('book_id');
            $table->string('borrower_name');
            $table->timestamp('loan_start');
            $table->timestamps('loan_end')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
        Schema::dropIfExists('loans');
    }
};

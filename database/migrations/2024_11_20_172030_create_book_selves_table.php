<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('book_selves', function (Blueprint $table) {
            $table->id();
            $table->string('book_cat');
            $table->string('accession');
            $table->string('titlee');
            $table->string('author')->default('0');
            $table->string('subject')->default('0');
            $table->string('place_of_publication')->default('0');
            $table->string('publisher');
            $table->string('types')->default('0');
            $table->string('corps')->default('0');
            $table->year('year_of_publication');
            $table->decimal('price', 8, 2);
            $table->string('edition')->default('0');
            $table->string('volume');
            $table->string('pages');
            $table->string('source');
            $table->string('location');
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_selves');
    }
};

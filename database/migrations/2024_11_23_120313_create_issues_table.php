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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->string('issue_date');
            $table->bigInteger('member_id');
            $table->string('rank');
            $table->string('corps');
            $table->string('unite');
            $table->bigInteger('mobile_no');
            $table->string('return_date');
            $table->integer('book_name');
            $table->string('realReturnDate')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};

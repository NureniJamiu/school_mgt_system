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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->required();
            $table->string('lastname')->required();
            $table->string('othername')->nullable();
            $table->string('hobby')->nullable();
            $table->string('dob')->required();
            $table->string('gender')->required();
            $table->string('tel')->nullable();
            $table->string('file')->required();
            $table->unsignedBigInteger('class_id')->nullable();
            $table->unsignedBigInteger('address_id')->nullable();
            $table->unsignedBigInteger('guardian_id')->nullable();
            $table->timestamps();

            // Define foreign key constraints
            // $table->foreign('class_id')->references('id')->on('class');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};

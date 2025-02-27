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
        Schema::create('classroom_students', function (Blueprint $table) {
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('student_id');
            $table->timestamps();

            $table->foreign('classroom_id')->references('classroom_id')->on('classrooms')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('student_id')->references('student_id')->on('students')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classroom_students');
    }
};

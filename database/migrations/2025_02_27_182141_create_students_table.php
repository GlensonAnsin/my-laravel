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
            $table->id('student_id');
            $table->string('email', 45);
            $table->string('password', 45);
            $table->string('fname', 45);
            $table->string('lname', 45);
            $table->date('dob');
            $table->string('phone', 15);
            $table->string('mobile', 15);
            $table->unsignedBigInteger('parent_id');
            $table->date('date_of_join');
            $table->boolean('status');
            $table->date('last_login_date');
            $table->string('last_login_ip', 45);
            $table->timestamps();

            $table->foreign('parent_id')->references('parent_id')->on('parents')->onUpdate('cascade')->onDelete('cascade');
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

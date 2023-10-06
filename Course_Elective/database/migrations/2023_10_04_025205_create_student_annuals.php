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
        Schema::create('student_annuals', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id')->unsigned();
            $table->foreign('student_id')->references('id')->on('students')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('academic_year_id');
            $table->integer('promotion_id');
            $table->integer('degree_id');
            $table->integer('grade_id');
            $table->integer('department_id');
            $table->integer('department_option_id');
            $table->string('group');
            $table->integer('history_id');
            $table->integer('scholarships_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_annuals');
    }
};

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
        Schema::create('course_annually', function (Blueprint $table) {
            $table->id();
            $table->text('');
            $table->text('name_kh');
            $table->text('empoyee_id');
            $table->text('academic_year_id');
            $table->integer('semester_id');
            $table->integer('time_td');
            $table->integer('time_tp');
            $table->integer('credit');
            $table->integer('degree_id');
            $table->integer('department_id');
            $table->integer('department_option_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_annually');
    }
};

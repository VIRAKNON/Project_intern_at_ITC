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
        Schema::create('courses_program', function (Blueprint $table) {
            $table->id();
            $table->string('name_kh');
            $table->string('name_en');
            $table->string('name_fr');
            $table->string('code');
            $table->integer('time_course');
            $table->integer('time_td');
            $table->integer('time_tp');
            $table->integer('credit');
            $table->boolean('is_counted_creditability');
            $table->integer('degree_id');
            $table->integer('grade_id');
            $table->integer('department_id');
            $table->integer('department_option_id');
            $table->integer('semester_id');
            $table->boolean('active');
            $table->integer('resposibility_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses_program');
    }
};

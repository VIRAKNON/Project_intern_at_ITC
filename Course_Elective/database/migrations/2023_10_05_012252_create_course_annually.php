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
            $table->integer('course_name_id');
            $table->integer('empoyee_id');
            $table->integer('academic_year_id');
            $table->integer('semester_id');
            $table->integer('degree_id');
            $table->integer('grade_id');
            $table->integer('department_id');
            $table->integer('department_option_id');
            $table->integer('group_id');
            $table->integer('time_course');
            $table->integer('time_td');
            $table->integer('time_tp');
            $table->integer('credit');
            $table->text('name_kh');
            $table->text('name_en');
            $table->text('name_fr');
            $table->boolean('is_counted_asence');
            $table->integer('score_percentage_column_1');
            $table->integer('score_percentage_column_2');
            $table->integer('score_percentage_column_3');
            $table->integer('responsible_department_id');
            $table->integer('is_elective');


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

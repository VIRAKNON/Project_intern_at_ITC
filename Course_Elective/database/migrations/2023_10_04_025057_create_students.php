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
            $table->text('id_card');
            $table->string('name_kh');
            $table->string('name_latin');
            $table->integer('gender_id');
            $table->date('dob');
            $table->integer('pob');
            $table->boolean('radie');
            $table->text('observation');
            $table->integer('origin_id');
            $table->string('tel');
            $table->string('email');
            $table->text('address_current');
            $table->text('address_permanent');
            $table->string('parent_name');
            $table->string('parent_occupation');
            $table->text('parent_address');
            $table->string('parent_tel');
            $table->string('highschool_id');
            $table->integer('mcs_no');
            $table->string('can_id');
            $table->text('photo');
            $table->timestamps();
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

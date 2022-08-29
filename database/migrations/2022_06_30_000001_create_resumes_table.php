<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('place_of_birth')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->foreignId('religion_id')->nullable();
            $table->string('ethnic', 150)->nullable();
            $table->string('address')->nullable();
            $table->char('rt')->nullable();
            $table->char('rw')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('city')->nullable();
            $table->string('kodepos')->nullable();
            $table->enum('married_status', ['Married', 'Not Married'])->nullable();
            $table->string('father_name')->nullable();
            $table->date('father_dob')->nullable();
            $table->string('father_address')->nullable();
            $table->string('father_education')->nullable();
            $table->string('father_job')->nullable();
            $table->string('father_status')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('mother_dob')->nullable();
            $table->string('mother_address')->nullable();
            $table->string('mother_education')->nullable();
            $table->string('mother_job')->nullable();
            $table->string('mother_status')->nullable();
            $table->string('junior_school_name')->nullable();
            $table->string('junior_school_city')->nullable();
            $table->string('junior_school_year_enter')->nullable();
            $table->string('junior_school_year_graduate')->nullable();
            $table->string('junior_hi_school_name')->nullable();
            $table->string('junior_hi_school_city')->nullable();
            $table->string('junior_hi_school_year_enter')->nullable();
            $table->string('junior_hi_school_year_graduate')->nullable();
            $table->string('senior_hi_school_name')->nullable();
            $table->string('senior_hi_school_city')->nullable();
            $table->string('senior_hi_school_year_enter')->nullable();
            $table->string('senior_hi_school_year_graduate')->nullable();
            $table->string('university_name')->nullable();
            $table->string('gpa')->nullable();
            $table->string('university_year_enter')->nullable();
            $table->string('university_year_graduate')->nullable();
            $table->string('university_city')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resumes');
    }
}

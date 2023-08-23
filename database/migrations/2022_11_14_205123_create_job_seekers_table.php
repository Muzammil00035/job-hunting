<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_seekers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('Country')->nullable();
            $table->string('City')->nullable();
            $table->string('ZipCode')->nullable();
            $table->text('Full_Address')->nullable();
            $table->text('My_Desc')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->tinyInteger('status')->default(0);
            $table->string('Applicant_Resume')->nullable();
            $table->string('Applicant_Designation')->nullable();
            $table->string('Applicant_CMP_Address')->nullable();
            $table->string('Job_SDate')->nullable();
            $table->string('Notice_Period')->nullable();
            $table->string('Applicant_Skills')->nullable();
            $table->string('Applicant_Role')->nullable();
            $table->string('Applicant_Specilization')->nullable();
            $table->string('Applicant_College')->nullable();
            $table->string('Applicant_Passing')->nullable();
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
        Schema::dropIfExists('job_seekers');
    }
}

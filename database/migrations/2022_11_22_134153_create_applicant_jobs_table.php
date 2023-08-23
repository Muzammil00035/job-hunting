<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant_jobs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('USR_ID')->unsigned();
            $table->bigInteger('JOB_ID')->unsigned();
            $table->bigInteger('EMP_ID')->unsigned();
            $table->timestamps();
            $table->foreign('EMP_ID')->references('id')->on('employers')->onDelete('cascade');
            $table->foreign('JOB_ID')->references('id')->on('job_posteds')->onDelete('cascade');
            $table->foreign('USR_ID')->references('id')->on('job_seekers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicant_jobs');
    }
}

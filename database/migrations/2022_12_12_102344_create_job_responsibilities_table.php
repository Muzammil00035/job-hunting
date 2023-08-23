<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobResponsibilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_responsibilities', function (Blueprint $table) {
            $table->id();
            $table->string('Responsibilities')->nullable();
            $table->bigInteger('EMP_ID')->unsigned();
            $table->bigInteger('JOB_ID')->unsigned();
            $table->bigInteger('CMP_ID')->unsigned();
            $table->timestamps();
            $table->foreign('EMP_ID')->references('id')->on('employers')->onDelete('cascade');
            $table->foreign('CMP_ID')->references('id')->on('company_profiles')->onDelete('cascade');
            $table->foreign('JOB_ID')->references('id')->on('job_posteds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_responsibilities');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectiveResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objective_results', function (Blueprint $table) {
            $table->id();
            $table->string('Correct_Option');
            $table->string('Mark_Option');
            $table->string('Remarks');
            $table->bigInteger('USR_ID')->unsigned();
            $table->bigInteger('JOB_ID')->unsigned();
            $table->bigInteger('QA_ID')->unsigned();
            $table->timestamps();
            $table->foreign('USR_ID')->references('id')->on('job_seekers')->onDelete('cascade');
            $table->foreign('QA_ID')->references('id')->on('job_questions')->onDelete('cascade');
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
        Schema::dropIfExists('objective_results');
    }
}

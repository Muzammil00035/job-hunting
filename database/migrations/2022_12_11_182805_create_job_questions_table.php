<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_questions', function (Blueprint $table) {
            $table->id();
            $table->text('Questions')->nullable();
            $table->text('Option_A')->nullable();
            $table->text('Option_B')->nullable();
            $table->text('Option_C')->nullable();
            $table->text('Option_D')->nullable();
            $table->string('is_Correct')->nullable();
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
        Schema::dropIfExists('job_questions');
    }
}

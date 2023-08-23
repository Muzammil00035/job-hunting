<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserEmploymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_employments', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->date('S_From');
            $table->date('E_From');
            $table->string('CMP_Name');
            $table->string('Desc');
            $table->foreignId('USR_ID')->constrained('job_seekers');
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
        Schema::dropIfExists('user_employments');
    }
}

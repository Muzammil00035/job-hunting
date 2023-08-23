<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('CMP_Name');
            $table->string('CMP_Phone');
            $table->string('CMP_Email')->unique();
            $table->string('CMP_Website');
            $table->string('CMP_Country');
            $table->string('CMP_City');
            $table->string('CMP_PostalCode');
            $table->string('CMP_Address');
            $table->string('CMP_Logo');
            $table->string('CMP_Cover');
            $table->text('CMP_Desc');
            $table->bigInteger('EMP_ID')->unsigned();
            $table->timestamps();
            $table->foreign('EMP_ID')->references('id')->on('employers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_profiles');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('middlename');
            $table->string('lastname');
            $table->string('jobPosition');
            $table->string('mobileNumber');
            $table->string('employeeImagePath')->nullable();
            $table->date('birthday');
            $table->date('dateHired');
            $table->string('email')->unique();
            $table->string('sss')->nullable();
            $table->string('pagibig')->nullable();
            $table->string('philHealth')->nullable();
            $table->string('tin')->nullable();
            $table->string('driversLisence')->nullable();
            $table->string('contactPerson')->nullable();
            $table->string('contactNumber')->nullable();
            $table->string('adressHouseNumber')->nullable();
            $table->string('adressStreet')->nullable();
            $table->string('addressLine2')->nullable();
            $table->string('addressCity');
            $table->string('addressProvince');
            $table->string('addressCountry');
            $table->string('addressZipCode')->nullable();
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
        Schema::dropIfExists('employees');
    }
};

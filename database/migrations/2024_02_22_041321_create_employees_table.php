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
            $table->string('gender');
            $table->string('mobileNumber');
            $table->string('email');
            $table->date('birthday');
            $table->string('jobPosition');
            $table->date('dateHired');
            $table->string('employeeImagePath')->nullable();
            $table->string('sss')->nullable();
            $table->string('pagibig')->nullable();
            $table->string('philHealth')->nullable();
            $table->string('tin')->nullable();
            $table->string('driversLicense')->nullable();
            $table->string('contactPerson')->nullable();
            $table->string('contactNumber')->nullable();
            $table->string('addressHouseNumber');
            $table->string('addressStreet');
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

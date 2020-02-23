<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('emp_name');
            $table->string('emp_phone')->nullable();
            $table->string('emp_category');
            $table->string('emp_profession');
            $table->string('associate_about')->nullable();
            $table->string('associate_rating')->nullable();
            $table->string('associate_experience')->nullable();
            $table->string('associate_address')->nullable();
            $table->string('associate_state');
            $table->string('associate_city');
            $table->string('associate_postalcode')->nullable();
            $table->string('accounttype')->nullable();
            $table->string('email')->unique();
            $table->string('password');
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
}

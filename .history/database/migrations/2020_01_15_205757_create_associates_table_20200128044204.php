<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phone');
            $table->string('associate_category');
            $table->string('associate_profession');
            $table->string('associate_about')->nullable();;
            $table->string('associate_rating')->nullable();;
            $table->string('associate_experience')->nullable();;
            $table->string('associate_address')->nullable();;
            $table->string('associate_state');
            $table->string('associate_city');
            $table->string('associate_postalcode')->nullable();;
            $table->string('accounttype')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('associates');
    }
}

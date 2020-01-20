<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHostedServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosted_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('byAssociate')->unique();;
            $table->string('requirements');
            $table->string('deliverables');
            $table->string('servicename');
            $table->string('timeline');
            $table->string('status')->nullable();
            $table->string('price');
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
        Schema::dropIfExists('hosted_services');
    }
}

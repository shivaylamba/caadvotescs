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
            $table->string('byAssociate');
            $table->longText('requirements');
            $table->longText('deliverables');
            $table->string('servicename');
            $table->string('serviceslug');
            $table->string('timeline');
            $table->string('status')->nullable();
            $table->string('price');
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

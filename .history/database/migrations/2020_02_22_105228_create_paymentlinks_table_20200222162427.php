<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentlinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentlinks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('lead_name');
            $table->string('lead_email');
            $table->string('lead_phone');
            $table->string('lead_category');
            $table->string('lead_service');
            $table->string('lead_amount');
            $table->string('lead_note');
            $table->string('lead_name');
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
        Schema::dropIfExists('paymentlinks');
    }
}

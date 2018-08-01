<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact_title');
            $table->string('address_1');
            $table->string('address_2');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
            $table->string('phone');
            $table->string('email');
            $table->string('payment_method');
            $table->string('type_goods');
            $table->string('discount_available');
            $table->string('current_order');
            $table->text('notes');
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
        Schema::dropIfExists('suppliers');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('street_address', 100)->nullable();
            $table->string('town', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('postcode', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->string('email_address', 100)->nullable();
            $table->string('order_note', 100)->nullable();
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
        Schema::dropIfExists('shipping_addresses');
    }
}

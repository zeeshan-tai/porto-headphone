<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100)->nullable();
            $table->string('slug', 100)->nullable();
            $table->text('short_description', 50)->nullable();
            $table->text('description', 100)->nullable();
            $table->double('price', 100)->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->boolean('status', 100)->nullable();
            $table->unsignedInteger('brand_id')->nullable();
            $table->string('thumbnail', 100)->nullable();
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
        Schema::dropIfExists('products');
    }
}

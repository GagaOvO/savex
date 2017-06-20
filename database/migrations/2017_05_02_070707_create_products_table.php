<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('productcategory')->onDelete('cascade');
            $table->integer('subcategory_id')->unsigned();
            $table->foreign('subcategory_id')->references('id')->on('subcategory')->onDelete('cascade');
            $table->string('product_image');
            $table->string('product_name');
            $table->string('product_price');
            $table->string('product_desc');
            $table->string('product_type');
            $table->string('product_quantity');
            $table->string('product_size');
            $table->string('product_color');
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

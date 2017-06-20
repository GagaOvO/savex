<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('package_category_id')->unsigned();
            $table->foreign('package_category_id')->references('id')->on('package_category')->onDelete('cascade');
            $table->string('package_image');
            $table->string('package_name');
            $table->string('package_price');
            $table->text('package_desc');
            $table->string('duration');
            $table->string('Location');
            $table->string('ages');
            $table->string('start_point');
            $table->string('end_point');
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
        Schema::dropIfExists('tour_packages');
    }
}

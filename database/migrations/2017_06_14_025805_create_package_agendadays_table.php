<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageAgendadaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_agendadays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('package_id')->unsigned();
            $table->foreign('package_id')->references('id')->on('tour_packages')->onDelete('cascade');
            $table->string('day-name');
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
        Schema::dropIfExists('package_agendadays');
    }
}

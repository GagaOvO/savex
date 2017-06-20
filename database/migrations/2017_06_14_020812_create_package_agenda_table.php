<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('package_agendadays_id')->unsigned();
            $table->foreign('package_agendadays_id')->references('id')->on('package_agendadays')->onDelete('cascade');
            $table->string('time');
            $table->string('accomodation');
            $table->text('activity');
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
        Schema::dropIfExists('package_agenda');
    }
}

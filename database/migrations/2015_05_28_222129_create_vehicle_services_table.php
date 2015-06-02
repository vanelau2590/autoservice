<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::create('vehicle_services', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('serviceName');
            $table->integer('price');
            $table->integer('durationAprox');
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
		Schema::drops('vehicle_services');
	}

}

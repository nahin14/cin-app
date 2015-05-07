<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class CreateVehiclesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('vehicles', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug', 7)->nullable();
            $table->integer('clientID')->unsigned()->onDelete('cascade');
            $table->integer('vehicleTypeID')->unsigned()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('vehicles', function($table) {
            $table->foreign('clientID')->references('id')->on('clients')->onDelete('cascade');
            $table->foreign('vehicleTypeID')->references('id')->on('vehicle_types')->onDelete('cascade');

        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehicles');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class CreateClaimTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('claim_types', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('claimTypeName', 15);
            $table->timestamps();
		});

        DB::table('claim_types')->insert(array(
            array('claimTypeName' => 'Driver'),
            array('claimTypeName' => 'Passenger'),
            array('claimTypeName' => 'Cyclist'),
            array('claimTypeName' => 'Pedestrian'),
            array('claimTypeName' => 'Bus Passenger'),
            array('claimTypeName' => 'Taxi Passenger')
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('claim_types');
	}

}

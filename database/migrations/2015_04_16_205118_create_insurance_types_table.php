<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class CreateInsuranceTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('insurance_types', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('insuranceTypeName', 20);
			$table->timestamps();
		});

        DB::table('insurance_types')->insert(array(
            array('insuranceTypeName' => 'Third Party'),
            array('insuranceTypeName' => 'Fully Comprehensive'),
            array('insuranceTypeName' => 'None')
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('insurance_types');
	}

}

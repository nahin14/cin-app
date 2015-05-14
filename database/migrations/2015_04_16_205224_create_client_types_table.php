<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class CreateClientTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('client_types', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('clientTypeName');
            $table->timestamps();
		});

        DB::table('client_types')->insert(array(
            array('clientTypeName' => 'Claimant'),
            array('clientTypeName' => 'Defendant')
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('client_types');
	}

}

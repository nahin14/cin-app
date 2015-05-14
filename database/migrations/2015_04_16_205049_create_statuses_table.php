<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class CreateStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('statuses', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('statusName', 20);
            $table->timestamps();
		});

        DB::table('statuses')->insert(array(
            array('statusName' => 'New'),
            array('statusName' => 'Pending'),
            array('statusName' => 'Completed'),
            array('statusName' => 'Cancelled'),
        ));
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('statuses');
	}

}

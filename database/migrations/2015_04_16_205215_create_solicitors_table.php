<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class CreateSolicitorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('solicitors', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug', 30);
            $table->string('firmName', 30);
            $table->string('addressLine1', 30);
            $table->string('addressLine2', 30)->nullable();
            $table->string('city', 30);
            $table->string('postcode', 8);
            $table->string('telephone', 11);
            $table->string('mobile', 11)->nullable();
            $table->string('email', 30)->unique();
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
		Schema::drop('solicitors');
	}

}

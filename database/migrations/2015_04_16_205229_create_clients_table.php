<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * @author      Nahin Miah <Nahin.Miah.1@city.ac.uk>
 * @version     1.0
 */

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('clients', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('slug', 30);
            $table->date('dob');
            $table->string('addressLine1', 30);
            $table->string('addressLine2', 30)->nullable();
            $table->string('city', 30);
            $table->string('postcode', 8);
            $table->string('email', 30)->unique();
            $table->string('telephone', 11)->nullable();
            $table->string('mobile', 11)->nullable();
            $table->string('licenseNo', 16)->nullable();
            $table->integer('insuranceTypeID')->unsigned()->onDelete('cascade');
            $table->integer('insurerID')->unsigned()->onDelete('cascade');
            $table->timestamps();
        });

        Schema::table('clients', function($table) {
            $table->foreign('insurerID')->references('id')->on('insurers')->onDelete('cascade');
            $table->foreign('insuranceTypeID')->references('id')->on('insurance_types')->onDelete('cascade');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients');
	}

}

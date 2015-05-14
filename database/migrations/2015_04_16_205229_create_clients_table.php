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

        DB::table('clients')->insert(array(
            array('slug' => 'Perry Park', 'dob' => '1986-02-12', 'addressLine1' => '23', 'addressLine2' => 'Ravensdale Avenue',
                'city' => 'London', 'postcode' => 'N12 9SS', 'email' => 'park86@example.com', 'telephone' => '02034536769',
                'mobile' => '07455989420', 'licenseNo' => 'PARK485723430411',
                'insuranceTypeID' => '1', 'insurerID' => '1'),
            array('slug' => 'Moe Hassan', 'dob' => '1990-06-03', 'addressLine1' => '77', 'addressLine2' => 'Maroon Street',
                'city' => 'London', 'postcode' => 'E14 7RG', 'email' => 'mhassan90@example.com', 'telephone' => '02077090591',
                'mobile' => '07455989420', 'licenseNo' => 'HASSAN5723430411',
                'insuranceTypeID' => '2', 'insurerID' => '2')

        ));


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
